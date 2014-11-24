<?php namespace UNAM\Filmoteca;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Sentry;

use Cartalyst\Sentry\Groups\GroupExistsException;

class InstallCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'filmoteca:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Runs syntara:install command, setups the admin user and creates the "Strudent" group.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		try{

			$this->info( 'Creating Students group.');

			Sentry::createGroup(['name' => 'Students']);

			$this->info( '"Student" group created with success.');

		}catch(GroupExistsException $e){

			$this->info( 'The group already exists. Do nothing.');
		}

		$this->call('syntara:install');



		$this->info('## Creación del usuario administrador ##');

		$user = $this->ask( 'Admin user name: ') ;

		$password = $this->ask( 'Admin password: ') ;

		$second_password = $this->ask( 'Confirm password: ') ;

		while( $password != $second_password ){

			$this->error( 'The passwords are not same. Try again.');

			$second_password = $this->ask( 'Confirm password: ');
		}

		$email = $this->ask( 'Admin email: ');

		$this->call('create:user', [
			'username' => $user,
			'password' => $password,
			'email'    => $email,
			'group'    => 'Admin']);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
		// return array(
		// 	array('example', InputArgument::REQUIRED, 'An example argument.'),
		// );
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [];
		// return array(
		// 	array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		// );
	}

}
