<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportTaskData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ads:import-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取积分墙中的任务数据';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
