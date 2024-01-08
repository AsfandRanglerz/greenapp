<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\Validator;


class SendAllNotificationController extends Controller
{
    public function index()
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
        $data = $request->select;
        $message = $request->message;

        if ($data == 'Companies') {
            // $companies = Company::orderBy('id', 'desc')->get();
            $notification = AdminNotification::create([
                'title' => $request->title,
                'message' => $request->message,
                'to_all' => $data,
            ]);
            return redirect()->route('notification-index')->with('success', 'Sended Successfully.');
        } elseif ($data == 'Employees') {
            $employee = User::with('usercompany')->whereempType('company')->orderBy('id', 'desc')->get();
            $notification = AdminNotification::create([
                'title' => $request->title,
                'message' => $request->message,
                'to_all' => $data,
            ]);
            return view('admin.notifications.index')->with('success', 'Created Successfully');
        } elseif ($data == 'Individuals') {
            $self_employee = User::whereempType('self')->orderBy('id', 'desc')->get();
            $notification = AdminNotification::create([
                'title' => $request->title,
                'message' => $request->message,
                'to_all' => $data,
            ]);
            return view('admin.notifications.index')->with('success', 'Created Successfully');
        } elseif ($data == 'All Employees') {
            $all_employee = User::orderBy('id', 'desc')->get();
            $notification = AdminNotification::create([
                'title' => $request->title,
                'message' => $request->message,
                'to_all' => $data,
            ]);
            return view('admin.notifications.index')->with('success', 'Created Successfully');
        } else {
            return redirect()->back()->with(['status' => false, 'message' => 'You enter wrong data.']);
        }
    }

    public function show_notification_to_company()
    {
        $seen = AdminNotification::where('to_all', 'Companies')->where('seen', 0)->get();
        // Check if there are records matching the criteria
        if ($seen->isNotEmpty()) {
            // Use update on the query builder instance, not on the collection
            AdminNotification::where('to_all', 'Companies')->where('seen', 0)->update([
                'seen' => 1,
            ]);
        }
        $company_notifications = AdminNotification::where('to_all', 'Companies')->orderBy('id', 'desc')->get();
        return view('company.notifications.index', compact('company_notifications'));
    }

    public function show_notification_to_employee()
    {
        $seen = AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('seen', '0')->get();
        if ($seen->isNotEmpty()) {
            AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('seen', '0')->update([
                'seen' => 1,
            ]);
        }
        $employee_notifications = AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->orderBy('id', 'desc')->get();
        return view('user.notifications.employeeIndex', compact('employee_notifications'));
    }

    public function show_notification_to_self_employee()
    {
        $seen = AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('seen', '0')->get();
        if ($seen->isNotEmpty()) {
            AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('seen', '0')->update([
                'seen' => 1,
            ]);
        }
        $self_employee_notifications = AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->orderBy('id', 'desc')->get();
        return view('user.notifications.selfEmployeeIndex', compact('self_employee_notifications'));
    }
}
