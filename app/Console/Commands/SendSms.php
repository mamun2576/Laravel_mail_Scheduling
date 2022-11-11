<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\UserAlert;
use Illuminate\Support\Facades\Mail;

class SendSms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('test@gmail.com')->send(new UserAlert());
        return Command::SUCCESS;
    }
}
