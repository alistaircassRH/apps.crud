<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->call('make:controller',
            ['--api' => true, 'name' => 'UserController', '--model' => 'User']);;
        $this->call('make:controller',
            ['--api' => true, 'name' => 'RoleController', '--model' => 'Role']);
    }
}
