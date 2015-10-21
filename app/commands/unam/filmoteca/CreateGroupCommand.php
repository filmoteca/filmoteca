<?php

namespace UNAM\Filmoteca;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Sentry;

class CreateGroupCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'create:group';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new group';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $name = $this->option('name');

        // create admin group
        try {
            $this->info('Creating "' . $name .  '" group...');
            $group = Sentry::getGroupProvider()->create(array(
                'name'        => $name,
                'permissions' => json_decode($this->option('permissions'), true)
            ));

            $this->info('"' . $name .'" group created with success');
        } catch (\Cartalyst\Sentry\Groups\GroupExistsException $e) {
            $this->info('"Admin" group already exists');
        }
    }

    protected function getOptions()
    {
        return array(
            [
                'name',
                null,
                InputOption::VALUE_OPTIONAL,
                'Group name.',
                'Admin'
            ],
            [
                'permissions',
                null,
                InputOption::VALUE_OPTIONAL,
                'json string with permissions.',
                "{\"superuser\": 1}"
            ],
        );
    }
}
