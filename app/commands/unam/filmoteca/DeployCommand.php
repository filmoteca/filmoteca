<?php namespace UNAM\Filmoteca;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Carbon\Carbon;
use Config;

class DeployCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'filmoteca:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploy the project.';

    /**
     * @var array
     */
    protected $option;

    /**
     * @var string
     */
    protected $tmpDir;

    /**
     * @var string
     */
    protected $tmpProjectDir;

    /**
     * @var Filesystem
     */
    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $this->tmpDir = $this->option('tmp-dir');
        $this->tmpProjectDir = $this->tmpDir . '/' . Config::get('parameters.deploy.defaults.project-name') . '/';

        $this->info('Creating temporal dir...');
        $this->createTmpDir($this->option('tmp-dir'));
        $this->info('Initializing Repository...');
        $this->initializeRepository($this->option('repository-url'));
        $this->info('Switching branch');
        $this->checkoutBranch($this->option('branch'));
        $this->info('Creating version file...');
        $this->createVersionFile(
            $this->option('branch'),
            $this->option('public-dir')
        );
        $this->info('Building...');
        $this->prepare($this->option('branch'));
        $this->info('Uploading...');
        $this->upload(
            $this->tmpProjectDir,
            $this->option('server-dir'),
            $this->option('user'),
            $this->option('server')
        );
        $this->info('Ready!!');
    }

    private function exec($command, $changeDir = true)
    {
        if ($changeDir) {
            $command = 'cd ' . $this->tmpProjectDir . ' && ' . $command;
        }

        exec($command, $output, $exitCode);

        if ($exitCode !== 0) {
            throw new \Exception();
        }

        return true;
    }

    private function createTmpDir($dir)
    {
        if (!$this->filesystem->exists($dir)) {
            $this->filesystem->makeDirectory($dir, 0755, true);
        }

        return true;
    }

    private function initializeRepository($repositoryUrl)
    {
        if ($this->filesystem->exists($this->tmpProjectDir)) {
            $this->info('The repository already exists.');
            return true;
        }

        return $this->exec(sprintf('cd %s && git clone %s', $this->tmpDir, $repositoryUrl), false);
    }

    private function checkoutBranch($branch)
    {
        $this->exec('git fetch origin');

        try {
            $command = sprintf(
                'git checkout -- . && git checkout %1$s && git reset --hard origin/%1$s',
                $branch
            );

            $this->exec($command);
        } catch (\Exception $e) {
            $this->exec(sprintf('git checkout -b %1$s origin/%1$s', $branch));
        }

        return true;
    }

    private function createVersionFile($branch, $publicDir)
    {
        $date               = Carbon::now()->toDateTimeString();
        $versionFileName    = Config::get('parameters.deploy.version.file-name');
        $versionTemplate    =
            "Deploy date: %s\n" .
            "Branch: %s\n" .
            "Current version: %s\n";

        exec(
            'cd ' . $this->tmpProjectDir . ' && ' . ' git rev-list HEAD -n 1',
            $version,
            $exitCode
        );

        if ($exitCode !== 0 && !isset($version[0])) {
            throw new \Exception();
        };

        $content = sprintf($versionTemplate, $date, $branch, $version[0]);

        file_put_contents($this->tmpProjectDir . '/' . $publicDir . '/' . $versionFileName, $content);

        return true;
    }

    private function prepare()
    {
        $this->exec('bower install');
        $this->exec('composer install --no-scripts');
        $this->exec('sass --update --force htdocs/assets/sass:htdocs/assets/css');

        $options = ['--env' => $this->option('env')];

        $this->call('migrate', $options);
        $this->call('clear-compiled', $options);
        $this->call('optimize', [
            '--env' => $this->option('env'),
            '--force' => ''
        ]);

        return true;
    }

    private function upload($origin, $destination, $user, $server)
    {
        $command = sprintf(
            'rsync --verbose --compress --rsh=ssh --recursive ' .
            '--times --perms --links --partial --progress ' .
            '%s %s@%s:%s',
            $origin,
            $user,
            $server,
            $destination
        );

        $this->info($command);

        return $this->exec($command);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            [
                'branch',
                null,
                InputOption::VALUE_OPTIONAL,
                'Branch to use.',
                Config::get('parameters.deploy.defaults.branch')
            ],
            [
                'tmp-dir',
                null,
                InputOption::VALUE_OPTIONAL,
                'Temporal directory to files to upload.',
                Config::get('parameters.deploy.defaults.tmp-dir')
            ],
            [
                'public-dir',
                null,
                InputOption::VALUE_OPTIONAL,
                'Name of public dir.',
                Config::get('parameters.deploy.defaults.public-dir')
            ],
            [
                'repository-url',
                null,
                InputOption::VALUE_OPTIONAL,
                'Url to the repository. ',
                Config::get('parameters.deploy.defaults.repository-url')
            ],
            [
                'server-dir',
                null,
                InputOption::VALUE_OPTIONAL,
                'Server directory to upload the project.',
                Config::get('parameters.deploy.defaults.server-dir')
            ],
            [
                'server',
                null,
                InputOption::VALUE_OPTIONAL,
                'Server direction (IP).',
                Config::get('parameters.deploy.defaults.server')
            ],
            [
                'user',
                null,
                InputOption::VALUE_OPTIONAL,
                'User in the server.',
                Config::get('parameters.deploy.defaults.user')
            ]
        );
    }
}
