<?php


namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\AddTask;
use Illuminate\Support\Facades\Mail;
class AddBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:balance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Balance';

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
        $balance =  AddTask::where('id', 1)->first()->balance;
        $balance = AddTask::where('id',1)->update(['balance'=>$balance + 5]);

    }

}
