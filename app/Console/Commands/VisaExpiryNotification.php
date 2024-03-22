<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\UserDocument;
use App\Mail\VisaExpiryEmail;
use Illuminate\Console\Command;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\Mail;

class VisaExpiryNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visa:expiryNotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notification to employees before visa expiry date';

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
        $visaDocuments = UserDocument::whereNotNull('issue_date')->whereNotNull('expiry_date')->where('notification_sent','none')->get();

        foreach ($visaDocuments as $document) {
            $expiryDate = Carbon::parse($document->expiry_date);
            $currentDate = Carbon::now();
            $remainingDays = $currentDate->diffInDays($expiryDate);
            $notificationDate = $expiryDate->subDays(7);
            if (Carbon::now()->greaterThanOrEqualTo($notificationDate)) {
                $user = $document->user;
                $data['user'] = $user;
                $data['document'] = $document;
                Mail::to($user->email)->send(new VisaExpiryEmail($data));
                $document->update(['notification_sent' => 'yes']);
                // if($user->emp_type == 'company')
                // {
                //     $notify = AdminNotification::create([
                //         'employee_id'=>$user->id,
                //         'to_all'=>'Employees',
                //         'title'=>'Visa Expiry Notification',
                //         'message' => 'Your Visa is expiring within 7 days.!',
                //     ]);
                // }
                // elseif($user->emp_type == 'self')
                // {
                //     $notify = AdminNotification::create([
                //         'employee_id'=>$user->id,
                //         'to_all'=>'Individuals',
                //         'title'=>'Visa Expiry Notification',
                //         'message' => 'Your Visa is expiring within 7 days.!',
                //     ]);
                // }
            }
        }

        $this->info('Visa expiry notifications sent successfully!');
    }
}
