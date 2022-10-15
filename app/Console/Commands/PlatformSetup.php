<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PlatformSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'platform:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This sets up the necessary';

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
     * @return int
     */
    public function handle()
    {
        $this->call("key:generate");
        $this->call("migrate");
        $this->call('jwt:secret');
        $this->call('role-manager:run');
        $this->call('oxygen-populate:sizes');
    } //end method handle
}//end class PlatformSetup
