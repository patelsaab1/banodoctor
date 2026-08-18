<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Mail;
use App\Models\Contact;
use App\Mail\CronJobContactMail;

class SendEnquiryDailyCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enquirycronjob';

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
        $data=Contact::latest()->get();
                      
      if(Mail::to('ceobanodoctor@gmail.com')->send(new CronJobContactMail($data)))
      {
        echo "email sent";
      }
      else
      {
        echo "have error";
      }
      
      
    }
}
