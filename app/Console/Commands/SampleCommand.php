<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send_to_master';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Collected Data to Local Server';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        return Command::SUCCESS;
    }
}
