<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteDataFromJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DeleteDataFromJobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notified users are deleted.';

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
        $jobs = DB::table('jobs')->where('attempts', 1)->get();
        foreach ($jobs as $job) {
            DB::table('jobs')->where('id', $job->id)->delete();
        }
    }

}
