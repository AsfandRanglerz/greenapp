<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\AdminNotification;
use App\Models\NotifyToAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PushNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;


class SendAllNotificationController extends Controller
{
    public function index()
    {
        $admin_notifications = NotifyToAdmin::orderBy('created_at', 'desc')->get();
        foreach($admin_notifications as $notification)
        {
            $notification->update([
                'seen'=>1,
            ]);
        }
        return view('admin.notifications.show',compact('admin_notifications'));
    }

    public function create()
    {
        return view('admin.notifications.index');
    }

    public function send_notification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $user = $request->select;
        $message = $request->message;

        if ($user == 'Companies') {
            $companies = Company::all();
            // return $ids;
            foreach($companies as $company)
            {
                $data = NULL;
                $data['title'] = $request->title;
                $data['message'] = $request->message;
                // return $data;
                $notification = new PushNotification($data);
                $company->notify($notification);
                $notification = AdminNotification::create([
                    'title' => $request->title,
                    'message' => $request->message,
                    'to_all' => $user,
                    'company_id' => $company->id,
                ]);
            }
            Notification::send($companies, new PushNotification($data));
            return redirect()->route('notification-index')->with('success', 'Sended Successfully.');
        }
        elseif ($user == 'Employees') {
            $employees = User::with('usercompany')->whereempType('company')->orderBy('id', 'desc')->get();
            $data = NULL;
            $data['title'] = $request->title;
            $data['message'] = $request->message;
            foreach($employees as $employee)
            {
                $notification = AdminNotification::create([
                    'title' => $request->title,
                    'message' => $request->message,
                    'to_all' => $user,
                    'employee_id' => $employee->id,
                ]);
            }
            Notification::send($employees, new PushNotification($data));
            return redirect()->route('notification-index')->with('success', 'Sended Successfully.');
        }
        elseif ($user == 'Individuals') {
            $self_employees = User::whereempType('self')->orderBy('id', 'desc')->get();
            $data = NULL;
            $data['title'] = $request->title;
            $data['message'] = $request->message;
            foreach($self_employees as $individual)
            {
                $notification = AdminNotification::create([
                    'title' => $request->title,
                    'message' => $request->message,
                    'to_all' => $user,
                    'employee_id' => $individual->id,
                ]);
            }
            Notification::send($self_employees, new PushNotification($data));
            return redirect()->route('notification-index')->with('success', 'Sended Successfully.');
        }
        elseif ($user == 'All Employees') {
            $all_employees = User::orderBy('id', 'desc')->get();
            $data = NULL;
            $data['title'] = $request->title;
            $data['message'] = $request->message;
            foreach($all_employees as $employee)
            {

                $notification = AdminNotification::create([
                    'title' => $request->title,
                    'message' => $request->message,
                    'to_all' => $user,
                    'employee_id' => $employee->id,
                ]);
            }
            Notification::send($all_employees, new PushNotification($data));
            return redirect()->route('notification-index')->with('success', 'Sended Successfully.');
        }

        else
        {
            return redirect()->back()->with(['status' => false, 'message' => 'You enter wrong data.']);
        }
    }

    public function show_notification_to_company()
    {
        $authId = Auth::guard('company')->id();
        // return $authId;

        $seen = AdminNotification::where('company_id',$authId)->where('to_all', 'Companies')->where('seen', 0)->get();
        // Check if there are records matching the criteria
        if ($seen->isNotEmpty()) {
            // Use update on the query builder instance, not on the collection
            AdminNotification::where('company_id',$authId)->where('to_all', 'Companies')->where('seen', 0)->update([
                'seen' => 1,
            ]);
        }
        $company_notifications = AdminNotification::where('company_id',$authId)->where('to_all','Companies')->orderBy('id', 'desc')->get();
        return view('company.notifications.index', compact('company_notifications'));
    }

    public function show_notification_to_employee()
    {
        $authId = Auth::guard('web')->id();
        // return $authId;
        $seen = AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('employee_id',$authId)->where('seen', '0')->get();
        if ($seen->isNotEmpty()) {
            AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('employee_id',$authId)->where('seen', '0')->update([
                'seen' => 1,
            ]);
        }
        $employee_notifications = AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('employee_id',$authId)->orderBy('id', 'desc')->get();
        return view('user.notifications.employeeIndex', compact('employee_notifications'));
    }

    public function show_notification_to_self_employee()
    {
        $authId = Auth::guard('web')->id();
        // return $authId;
        $seen = AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('employee_id',$authId)->where('seen', '0')->get();
        if ($seen->isNotEmpty()) {
            AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('employee_id',$authId)->where('seen', '0')->update([
                'seen' => 1,
            ]);
        }
        $self_employee_notifications = AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('employee_id',$authId)->orderBy('id', 'desc')->get();
        return view('user.notifications.selfEmployeeIndex', compact('self_employee_notifications'));
    }
}
