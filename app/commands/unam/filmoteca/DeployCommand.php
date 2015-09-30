<?php namespace UNAM\Filmoteca;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
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
        $this->createTmpDir($this->option('tmp-dir'));
        $this->info('Created temporal dir.');
        $this->initializeRepository($this->option('repository-url'));
        $this->info('Initialized Repository.');
        $this->checkoutBranch($this->option('branch'));
        $this->info('Switched branch.');
        $this->prepare();
        $this->info('Built.');
        $this->upload('./', $this->option('server-dir'), $this->option('server'));
//        $this->install($this->option('branch'));
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

        $this->tmpDir = $dir;
        $this->tmpProjectDir = $dir . '/' . Config::get('parameters.deploy.defaults.project-name');

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
            $this->exec(sprintf('git checkout %1$s && git reset --hard origin/%1$s', $branch));
        } catch (\Exception $e) {
            $this->exec(sprintf('git checkout -b %1$s origin/%1$s', $branch));
        }

        return true;
    }

    private function prepare()
    {
        return $this->exec('composer update && sass --update htdocs/assets/sass:htdocs/assets/css');
    }

    private function upload($origin, $destination, $server)
    {
        $command = sprintf(
            'rsync --verbose --compress --rsh=ssh --recursive ' .
            '--times --perms --links --partial --progress ' .
            '%s %s:%s',
            $origin,
            $server,
            $destination
        );

        $this->info($command);

        return $this->exec($command);
    }

    private function install($branch)
    {
        return $this->exec(sprintf('vendor/bin/envoy run deploy --branch=%s', $branch));
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
            ]
        );
    }
}
