<?php

namespace App\Helper;

use App\Models\AdminNotification;

class Helper
{
    public static function admin_notification($company_id,$employee_id,$process,$type,$employee_name)
    {
        $notify = AdminNotification::create([
            'company_id' => $company_id,
            'to_all' => 'Companies',
            'title' => 'Visa Notification',
            'message' => 'The '. $process .' '.' process has been started
            against '.$employee_name.  ' <a href="' . route('company.employee.visa.process', $employee_id) . '">' . ' click here. ' . '</a>',
        ]);
    }
}
