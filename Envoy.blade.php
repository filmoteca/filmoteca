@servers(['staging' => 'filmoteca@192.168.33.12'])

@setup
    $php = '/usr/local/php/bin/php'

@endsetup

@task('deploy', ['on' => 'staging', 'confirm' => true])
    {{ $php }} artisan migrate
    {{ $php }} artisan clear-compiled
    {{ $php }} artisan optimize
@endtask
