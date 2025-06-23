<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\NewVisaController;
use App\Http\Controllers\Admin\ReceiptsController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\SelfUserController;
use App\Http\Controllers\Admin\SubAdminController;
use App\Http\Controllers\Admin\IndividualVisaProcess;
use App\Http\Controllers\Admin\UserDocumentController;
use App\Http\Controllers\Admin\AdminReceiptsController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\NewVisaProcessController;
use App\Http\Controllers\Admin\CompanyDocumentController;
use App\Http\Controllers\Admin\AllProcessHandelController;
use App\Http\Controllers\Admin\ServicesResponseController;
use App\Http\Controllers\Admin\DependentDocumentController;
use App\Http\Controllers\Admin\SendAllNotificationController;
use App\Http\Controllers\Admin\DeletionRequestHandlerController;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

 */
Route::get('/cache_clear', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    return 'Application cache cleared!';
});
/*Admin routes

 * */

Route::get('/admin-login', [AuthController::class, 'getLoginPage']);

Route::post('admin/login', [AuthController::class, 'Login']);

Route::get('/admin-forgot-password', [AdminController::class, 'forgetPassword']);

Route::post('/admin-reset-password-link', [AdminController::class, 'adminResetPasswordLink']);

Route::get('/change_password/{id}', [AdminController::class, 'change_password']);

Route::post('/admin-reset-password', [AdminController::class, 'ResetPassword']);

Route::get('/admin-delete-company/{id}', [CompanyController::class, 'company_delete']);


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('dashboard', [AdminController::class, 'getdashboard']);//->middleware('permission:Dashboard');

    Route::get('profile', [AdminController::class, 'getProfile']);

    Route::post('note', [AdminController::class, 'note_update'])->name('note.update');

    Route::post('update-profile', [AdminController::class, 'update_profile']);

    Route::post('update-password', [AdminController::class, 'profile_change_password'])->name('profile.change-password');

    Route::get('Privacy-policy', [SecurityController::class, 'PrivacyPolicy'])->middleware('permission:PrivacyPolicy');

    Route::get('privacy-policy-edit', [SecurityController::class, 'PrivacyPolicyEdit'])->middleware('permission:PrivacyPolicy');

    Route::post('privacy-policy-update', [SecurityController::class, 'PrivacyPolicyUpdate'])->middleware('permission:PrivacyPolicy');

    Route::get('term-condition', [SecurityController::class, 'TermCondition'])->middleware('permission:Terms&Conditions');

    Route::get('term-condition-edit', [SecurityController::class, 'TermConditionEdit'])->middleware('permission:Terms&Conditions');

    Route::post('term-condition-update', [SecurityController::class, 'TermConditionUpdate'])->middleware('permission:Terms&Conditions');

    Route::get('logout', [AdminController::class, 'logout']);

    //Sub-Admin routes
    Route::get('get-sub-admins', [SubAdminController::class, 'index'])->name('get-sub-admins')->middleware('permission:SubAdmin');

    Route::get('create-sub-admin', [SubAdminController::class, 'create'])->name('create-sub-admin')->middleware('permission:SubAdmin');

    Route::post('add-sub-admin', [SubAdminController::class, 'store'])->name('add-sub-admin')->middleware('permission:SubAdmin');

    Route::post('add-sub-admin-permission/{id}', [SubAdminController::class, 'add_permission'])->name('add-sub-admin-permission')->middleware('permission:SubAdmin');

    Route::get('update-sub-admin-permission/{id}', [SubAdminController::class, 'update_permission'])->name('update-sub-admin-permission')->middleware('permission:SubAdmin');

    Route::get('edit-sub-admin/{id}', [SubAdminController::class, 'edit'])->name('edit-sub-admin')->middleware('permission:SubAdmin');

    Route::post('update-sub-admin/{id}', [SubAdminController::class, 'update'])->name('update-sub-admin')->middleware('permission:SubAdmin');

    Route::delete('delete-sub-admin/{id}', [SubAdminController::class, 'delete'])->name('delete-sub-admin')->middleware('permission:SubAdmin');


    // Notifications Routes
    Route::get('notification-index', [SendAllNotificationController::class, 'index'])->name('notification-index')->middleware('permission:Notifications');

    Route::get('notification-create', [SendAllNotificationController::class, 'create'])->name('notification-create')->middleware('permission:Notifications');

    Route::post('send-notification', [SendAllNotificationController::class, 'send_notification'])->name('send-notification')->middleware('permission:Notifications');

    // Receipts

    // Route::resource('receipts', AdminReceiptsController::class)->middleware('permission:Receipt');

    Route::get('receipt-user-index', [ReceiptsController::class, 'index'])->name('receipt-user-index')->middleware('permission:Receipts');

    Route::get('receipt-index/{id}', [ReceiptsController::class, 'receipts_index'])->name('user-receipts')->middleware('permission:Receipts');

    Route::get('create-receipt/{id}', [ReceiptsController::class, 'create'])->name('create-receipt')->middleware('permission:Receipts');

    Route::post('store-receipt/{id}', [ReceiptsController::class, 'store'])->name('store-receipt')->middleware('permission:Receipts');

    Route::get('edit-receipt/{id}/{receipt_id}', [ReceiptsController::class, 'edit'])->name('edit-receipt')->middleware('permission:Receipts');

    Route::post('update-receipt/{id}/{receipt_id}', [ReceiptsController::class, 'update'])->name('update-receipt')->middleware('permission:Receipts');

    Route::delete('delete-receipt/{id}/{receipt_id}', [ReceiptsController::class, 'delete'])->name('delete-receipt')->middleware('permission:Receipts');

    Route::get('download-receipt/{id}', [ReceiptsController::class, 'download'])->name('user-receipt.download')->middleware('permission:Receipts');


    //  visa process of employees

    Route::resource('visa', NewVisaController::class)/*->middleware('permission:Receipt')*/;

    Route::get('visa/{request_id}/{user_id}/{company_id}', [NewVisaController::class,'start_visa_process'])->name('start-process')->middleware('permission:VisaProcess');

    Route::post('visa-visa/{user_id}/{company_id}', [NewVisaController::class,'start_visa_process_by_admin'])->name('start-process-admin')->middleware('permission:VisaProcess');

    Route::get('view-process/{request_id}/{user_id}/{company_id}', [NewVisaController::class,'view'])->name('view-process')->middleware('permission:VisaProcess');

    Route::post('new-visa-process/{user_id}/{company_id}/{newvisa_id}/{req_id}', [NewVisaController::class,'new_visa_updation'])->name('new-visa-updation')->middleware('permission:VisaProcess');

    Route::post('renewal-process/{user_id}/{company_id}/{renewal_id}/{req_id}', [NewVisaController::class,'start_renewal_process'])->name('renewal-process-updation')->middleware('permission:VisaProcess');


    Route::post('work-permit-process/{user_id}/{company_id}/{sponsored_id}/{req_id}', [NewVisaController::class,'sponsored_by_some'])->name('sponsored-by-some-updation')->middleware('permission:VisaProcess');

    Route::post('part-time-process/{user_id}/{company_id}/{part_time}/{req_id}', [NewVisaController::class,'part_time'])->name('part-time-updation')->middleware('permission:VisaProcess');

    Route::post('uae-national-process/{user_id}/{company_id}/{uae_gcc}/{req_id}', [NewVisaController::class,'uae_gcc_process'])->name('uae-gcc-updation')->middleware('permission:VisaProcess');

    Route::post('modify-contract-process/{user_id}/{company_id}/{modify_cn}/{req_id}', [NewVisaController::class,'modify_cnt'])->name('modify-contract-updation')->middleware('permission:VisaProcess');

    Route::post('modify-visa-process/{user_id}/{company_id}/{modify_visa}/{req_id}', [NewVisaController::class,'modification_visa'])->name('modify-visa-updation')->middleware('permission:VisaProcess');

    Route::post('modify-emirates-process/{user_id}/{company_id}/{modify_emirates}/{req_id}', [NewVisaController::class,'modification_emirates'])->name('modify-emirates-updation')->middleware('permission:VisaProcess');

    Route::post('visa-cancellation-process/{user_id}/{company_id}/{visa_can}/{req_id}', [NewVisaController::class,'visa_cancellation'])->name('visa-cancellation-updation')->middleware('permission:VisaProcess');

    Route::post('permit-cancellation-process/{user_id}/{company_id}/{permit_can}/{req_id}', [NewVisaController::class,'permit_cancellation'])->name('permit-cancellation-updation')->middleware('permission:VisaProcess');

    // Route::get('get-visa-requests', [NewVisaProcessController::class, 'index'])->name('get-visa-requests')->middleware('permission:Receipt');

    // Route::get('visa-request-action/{id}', [NewVisaProcessController::class, 'show'])->name('visa-request-action')->middleware('permission:Receipt');

    // Route::get('download-receipt/{id}', [NewVisaProcessController::class, 'download'])->name('user-receipt.download')->middleware('permission:Receipt');

    // Route::get('download-receipt/{id}', [NewVisaProcessController::class, 'download'])->name('user-receipt.download')->middleware('permission:Receipt');


    // visa process of dependents
    Route::get('dependent-visa-section/{user_id}/{dependent_id}', [IndividualVisaProcess::class,'dependent_visa_section'])->name('dependent-visa-section')->middleware('permission:Individuals');

    Route::post('admin-start-visa-process/{user_id}/{dependent_id}', [IndividualVisaProcess::class,'visa_process_by_admin'])->name('admin-start-visa-process')->middleware('permission:Individuals');

    Route::post('dependent-new_visa-process/{user_id}/{dependent_id}/{process_id}', [IndividualVisaProcess::class,'new_visa_of_dependent'])->name('dependent-new-visa-process')->middleware('permission:Individuals');

    Route::post('dependent-renewal-process/{user_id}/{dependent_id}/{process_id}', [IndividualVisaProcess::class,'renewal_of_dependent'])->name('dependent-renewal-process')->middleware('permission:Individuals');

    Route::post('dependent-modification-visa-process/{user_id}/{dependent_id}/{process_id}', [IndividualVisaProcess::class,'modification_visa_of_dependent'])->name('dependent-modification-visa-process')->middleware('permission:Individuals');

    Route::post('dependent-modification-emirates-process/{user_id}/{dependent_id}/{process_id}', [IndividualVisaProcess::class,'modification_emirates_dependent'])->name('dependent-modification-emirates-process')->middleware('permission:Individuals');

    Route::post('dependent-visa-cancellation-process/{user_id}/{dependent_id}/{process_id}', [IndividualVisaProcess::class,'visa_cancellation_dependent'])->name('dependent-visa-cancellation-process')->middleware('permission:Individuals');

    Route::get('dependent-start-process/{request_id}/{user_id}/{dependent_id}', [IndividualVisaProcess::class,'start_dependent_process'])->name('dependent-start-process')->middleware('permission:Individuals');

    // dependents documents section
    Route::get('dependent-document-section/{id}',[DependentDocumentController::class,'index'])->name('dependent-document-section');
    Route::get('dependent-document-create/{id}',[DependentDocumentController::class,'create'])->name('dependent-document-create');
    Route::post('dependent-document-store/{id}',[DependentDocumentController::class,'store'])->name('dependent-document-store');
    Route::get('dependent-document-edit/{id}',[DependentDocumentController::class,'edit'])->name('dependent-document-edit');
    Route::post('dependent-document-update/{id}',[DependentDocumentController::class,'update'])->name('dependent-document-update');
    Route::get('dependent-document-delete/{id}',[DependentDocumentController::class,'delete'])->name('dependent-document-delete');
    Route::get('dependent-document-download/{id}',[DependentDocumentController::class,'download'])->name('dependent-document-download');

    // individual visa process

    Route::get('individual-visa-process-index/{id}', [IndividualVisaProcess::class,'visa_process_individual_by_admin'])->name('individual-visa-process-index')->middleware('permission:Individuals');

    Route::post('individual-visa-process-start-by-admin/{id}', [IndividualVisaProcess::class,'admin_starts_individual_visa_process'])->name('individual-visa-process-by-admin')->middleware('permission:Individuals');

    Route::get('individual-visa-process-start/{individual_id}/{request_id}', [IndividualVisaProcess::class,'start_individual_process'])->name('individual-visa-process-start')->middleware('permission:Individuals');

    Route::post('individual-visa-process-updation/{individual_id}', [IndividualVisaProcess::class,'add_individual_process_data'])->name('individual-visa-process-updation')->middleware('permission:Individuals');

    // visa excel files
    Route::post('employee-excel-file/{request_id}/{company_id}/{employee_id}', [AllProcessHandelController::class,'view_excel_file'])->name('employee-excel-file')->middleware('permission:Individuals');

    Route::get('get-complete-processes', [AllProcessHandelController::class,'complete_processes'])->name('get-complete-processes')->middleware('permission:Individuals');

    Route::get('admin-start-processes', [AllProcessHandelController::class,'admin_start_processes'])->name('get-admin-start-processes')->middleware('permission:Individuals');

    Route::post('dependent-excel-file/{request_id}/{employee_id}/{dependent_id}', [AllProcessHandelController::class,'view_excel_file_dependent'])->name('dependent-excel-file')->middleware('permission:Individuals');

    Route::post('individual-excel-file/{request_id}/{individual_id}', [AllProcessHandelController::class,'view_excel_file_individual'])->name('individual-excel-file')->middleware('permission:Individuals');

    // Route::post('employee-excel-file-complete/{company_id}/{employee_id}', [AllProcessHandelController::class,'view_excel_complete'])->name('employee-excel-file-complete')/*->middleware('permission:Receipt')*/;

    // Route::post('get-all-delete-requests/{company_id}/{employee_id}', [AllProcessHandelController::class,'view_excel_complete'])->name('dependent-excel-file-complete')/*->middleware('permission:Receipt')*/;

    Route::get('get-all-delete-requests/', [DeletionRequestHandlerController::class,'view'])->name('get-all-delete-requests')->middleware('permission:Receipt');

    Route::get('get-all-delete-requests/action', [DeletionRequestHandlerController::class,'action'])->name('requests-action')->middleware('permission:Receipt');



    // Services Response
    Route::get('get-services-requests', [ServicesResponseController::class, 'get_services_requests'])->name('get-services-requests')->middleware('permission:Services');

    Route::delete('delete-services-request/{id}', [ServicesResponseController::class, 'delete_request'])->name('delete-services-request')->middleware('permission:Services');

    Route::post('response-against-requests/{id}', [ServicesResponseController::class, 'response_to_request'])->name('response-against-requests')->middleware('permission:Services');

    /** Company routes  */

    Route::resource('company', CompanyController::class)->middleware('permission:Companies');

    Route::get('company-view', [CompanyController::class, 'view'])->middleware('permission:Companies');

    Route::get('company-document-index/{id}', [CompanyDocumentController::class, 'index'])->name('company-document.index')->middleware('permission:Companies');

    Route::get('company-document-create/{id}', [CompanyDocumentController::class, 'create'])->name('company-document.create')->middleware('permission:Companies');

    Route::post('company-document-store/{id}', [CompanyDocumentController::class, 'store'])->name('company-document.store')->middleware('permission:Companies');

    Route::get('company-document-destroy/{id}', [CompanyDocumentController::class, 'destroy'])->name('company-document.destroy')->middleware('permission:Companies');

    Route::get('company-document-edit/{id}', [CompanyDocumentController::class, 'edit'])->name('company-document.edit')->middleware('permission:Companies');

    Route::post('company-document-update/{id}', [CompanyDocumentController::class, 'update'])->name('company-document.update')->middleware('permission:Companies');

    Route::get('company-document-download/{id}', [CompanyDocumentController::class, 'download'])->name('company-document.download')->middleware('permission:Companies');



    /** User routes  */

    Route::resource('user', UserController::class)->middleware('permission:Employees');

    Route::get('employee-view', [UserController::class, 'view'])->middleware('permission:Employees');

    Route::get('user-document-index/{id}', [UserDocumentController::class, 'index'])->name('user-document.index')->middleware('permission:Employees');

    Route::get('user-document-create/{id}', [UserDocumentController::class, 'create'])->name('user-document.create')->middleware('permission:Employees');

    Route::post('user-document-store/{id}', [UserDocumentController::class, 'store'])->name('user-document.store')->middleware('permission:Employees');

    Route::get('user-document-destroy/{id}', [UserDocumentController::class, 'destroy'])->name('user-document.destroy')->middleware('permission:Employees');

    Route::get('user-document-edit/{id}', [UserDocumentController::class, 'edit'])->name('user-document.edit')->middleware('permission:Employees');

    Route::post('user-document-update/{id}', [UserDocumentController::class, 'update'])->name('user-document.update')->middleware('permission:Employees');

    Route::get('user-document-download/{id}', [UserDocumentController::class, 'download'])->name('user-document.download')->middleware('permission:Companies');

    Route::resource('faq', FaqController::class)->middleware('permission:Employees');

    Route::resource('inquiry', InquiryController::class)->middleware('permission:Employees');

    Route::resource('selfemployee', SelfUserController::class)->middleware('permission:Individuals');

    Route::get('self-employee-view', [SelfUserController::class, 'view'])->middleware('permission:Individuals');

    // individuals dependents routes

    Route::get('self-employee-dependents/{id}', [SelfUserController::class, 'dependents'])->name('individual-dependent-index')->middleware('permission:Individuals');

    Route::resource('about-us', AboutUsController::class)->middleware('permission:About us');

    Route::resource('privacy-policy', PrivacyPolicyController::class)->middleware('permission:PrivacyPolicy');

    Route::resource('term-condition', TermConditionController::class)->middleware('permission:Terms&Conditions');

});

/**Employee & Company panel Authentication routes*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', function () {

        return redirect('login');

    });


    Route::view('login', 'auth.login');

    Route::view('register', 'auth.register');

    Route::view('forget-password', 'auth.forget-password');

    Route::view('otp', 'auth.otp')->name('otp');

    Route::post('login', 'AuthController@login')->name('login');

    Route::post('company/register', 'AuthController@register')->name('register');

    Route::post('forget-password', 'AuthController@forgetPassword')->name('forget-password');

    Route::post('confirm-token', 'AuthController@confirmToken')->name('confirmToken');

    Route::get('reset-password', 'AuthController@resetPassword')->name('reset-password');

    Route::post('change-password', 'AuthController@changePassword')->name('resets-password');

    // login form routes

    Route::get('faqs','AuthController@faqs')->name('login-form-page-faq');
    Route::get('privacy-policy','AuthController@privacy')->name('login-form-page-privacy');
    Route::get('term-&-conditions','AuthController@term')->name('login-form-page-term');
    Route::get('about-us','AuthController@about')->name('login-form-page-about');
    Route::get('contact-us','AuthController@contact')->name('login-form-page-contact');


});

/** Company panel Routes*/
Route::get('show-notifications', [SendAllNotificationController::class, 'show_notification_to_company'])->name('show-notifications');

Route::group(['prefix' => 'company', 'namespace' => 'App\Http\Controllers\Company', 'middleware' => 'company', 'as' => 'company.'], function () {

    Route::get('logout', 'HomeController@logout')->name('logout');

    Route::post('note', 'HomeController@note_update')->name('note.update');

    Route::get('note', 'HomeController@getnote');

    Route::get('dashboard', 'HomeController@index')->name('dashboard');

    Route::resource('profile', 'ProfileController');

    Route::resource('employee', 'EmployeeController');

    Route::get('employee-view', 'EmployeeController@view');

    Route::resource('employeeDocument', 'EmployeeDocumentController');

    Route::get('employeeDownload/{id}', 'EmployeeDocumentController@download')->name('employeeDocument.download');

    Route::resource('document', 'DocumentController');

    Route::get('download/{id}', 'DocumentController@download')->name('document.download');

    Route::get('change-password', 'ProfileController@changePasswordIndex')->name('ChangePassword.index');

    Route::post('change-password', 'ProfileController@changePassword')->name('changePassword');

    // Account delete request
    Route::post('delete-request', 'ProfileController@deleteRequest')->name('company-request.delete');


    // visa process

    Route::get('employee-visa-process/{id}', 'EmployeeVisaProcessController@index')->name('employee.visa.process');

    Route::post('sent-new-visa-request/{id}', 'EmployeeVisaProcessController@visa_process_request')->name('sent-new-visa-request');

    Route::post('new-visa-updation-company/{id}', 'EmployeeVisaProcessController@new_visa_data')->name('new-visa-updation-company');

    Route::post('renewal-process/{id}', 'EmployeeVisaProcessController@renewal_process')->name('renewal-process-company');

    Route::post('sponsored-by-process/{id}', 'EmployeeVisaProcessController@sponsored_by')->name('sponsored-by-process-company');

    Route::post('part-time-process/{id}', 'EmployeeVisaProcessController@part_time')->name('part-time-company');

    Route::post('uae-national-process/{id}', 'EmployeeVisaProcessController@uae_gcc')->name('uae-gcc-company');

    Route::post('modify-contract-process/{id}', 'EmployeeVisaProcessController@modify_contract')->name('modify-contract-company');

    Route::post('visa-modification-process/{id}', 'EmployeeVisaProcessController@visa_modification')->name('modification-visa-process-company');

    Route::post('emirates-id-modification-process/{id}', 'EmployeeVisaProcessController@emirates_modification')->name('modification-emirates-process-company');

    Route::post('visa-cancellation-process/{id}', 'EmployeeVisaProcessController@visa_cancellation')->name('visa-cancellation-process-company');

    Route::post('permit-cancellation-process/{id}', 'EmployeeVisaProcessController@permit_cancellation')->name('permit-cancellation-process-company');



    /** All security routes */

    Route::get('faqs', 'SecurityController@faq')->name('faqs');

    Route::get('about-us', 'SecurityController@aboutUs')->name('about-us');

    Route::get('privacy-policy', 'SecurityController@privacyPolicy')->name('privacy-policy');

    Route::get('term&condition', 'SecurityController@termCondition')->name('term-condition');

});

/**Employee panel Routes*/
Route::get('show-notifications-to-employee', [SendAllNotificationController::class, 'show_notification_to_employee'])->name('show-notifications-to-employee');

Route::get('show-notifications-to-self-employee', [SendAllNotificationController::class, 'show_notification_to_self_employee'])->name('show-notifications-to-self-employee');

Route::get('show-notifications-to-all', [SendAllNotificationController::class, 'show_notification_to_all_employee'])->name('show-notifications-to-all');

// Route::get('get-services',[IndividualServicesController::class, 'services_index'])->name('show');

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\User', 'middleware' => 'user', 'as' => 'user.'], function () {

    Route::get('logout', 'HomeController@logout')->name('logout');

    Route::get('dashboard', 'HomeController@index')->name('dashboard');

    Route::resource('profile', 'ProfileController');

    Route::post('note', 'HomeController@note_update')->name('note.update');

    Route::get('change-password', 'ProfileController@changePassword_index')->name('changePassword.index');

    Route::post('change-password', 'ProfileController@changePassword')->name('changePassword');

    Route::resource('document', 'DocumentController');

    Route::get('documentDownload/{id}', 'DocumentController@download')->name('document.download');

    Route::resource('inquiry', 'InquiryController');

    Route::resource('generateCV', 'GenerateCVController');

    Route::get('myCv', 'MyCvController@myCvIndex')->name('myCv.index');

    Route::put('add-cv-details/{id}', 'MyCvController@add_cv_details')->name('add-cv-details');

    Route::get('get-services','IndividualServicesController@services_index')->name('get-services.index');

    Route::get('request-service','IndividualServicesController@request_for_service')->name('request-service');

    Route::post('request-store','IndividualServicesController@store_request')->name('request-store');

    Route::get('edit-request/{id}','IndividualServicesController@edit_request')->name('edit-request');

    Route::post('request-update/{id}','IndividualServicesController@request_update')->name('request-update');

    Route::delete('request-delete/{id}','IndividualServicesController@delete_request')->name('request-delete');


    // Account delete request
    Route::post('delete-request', 'ProfileController@deleteRequest')->name('user-request.delete');

    // Dependents routes

    Route::get('get-dependent','DependentController@index')->name('get-dependent');

    Route::get('create-dependent','DependentController@create')->name('create-dependent');

    Route::post('add-dependent/{id}','DependentController@store')->name('add-dependent');

    Route::get('edit-dependent/{id}','DependentController@edit')->name('edit-dependent');

    Route::post('update-dependent/{id}','DependentController@update')->name('update-dependent');

    Route::delete('delete-dependent/{id}','DependentController@delete')->name('delete-dependent');

    // dependents documents section
    Route::get('dependent-document-index/{id}','DependentController@document_index')->name('dependent-document-index');
    Route::get('dependent-document-create/{id}','DependentController@document_create')->name('dependent-document-create');
    Route::post('dependent-document-store/{id}','DependentController@document_store')->name('dependent-document-store');
    Route::get('dependent-document-edit/{id}','DependentController@document_edit')->name('dependent-document-edit');
    Route::patch('dependent-document-update/{document}','DependentController@document_dependent_update')->name('dependent-document-update');
    Route::delete('dependent-document-destroy/{id}','DependentController@document_delete')->name('dependent-document-destroy');
    Route::get('dependent-document-download/{id}','DependentController@document_dependent_download')->name('dependent-document-download');



    // individual dependent visa process controller

    Route::get('dependent-visa-process/{id}','IndividualDependentVisaController@index')->name('dependent-visa-process');

    Route::post('individual-dependent-visa-request/{id}','IndividualDependentVisaController@send_request')->name('dependent-visa-request');

    Route::post('individual-dependent-entry-visa/{id}','IndividualDependentVisaController@entry_visa_updation')->name('individual-dependent-entry-visa');

    Route::post('individual-dependent-renewal-process/{id}','IndividualDependentVisaController@renewal_process_updation')->name('individual-dependent-renewal-process');

    Route::post('individual-dependent-modification-visa-process/{id}','IndividualDependentVisaController@modification_visa_updation')->name('individual-dependent-modification-visa-process');

    Route::post('individual-dependent-modification-emirates-process/{id}','IndividualDependentVisaController@modification_emirates_updation')->name('individual-dependent-modification-emirates-process');

    // Receipts

    Route::get('get-receipts','UserReceiptsController@index')->name('get-receipts');

    Route::get('create-receipt','UserReceiptsController@create')->name('create-receipt');

    Route::post('store-receipt','UserReceiptsController@store')->name('store-receipt');

    Route::get('edit-receipt/{id}','UserReceiptsController@edit')->name('edit-receipt');

    Route::post('update-receipt/{id}','UserReceiptsController@update')->name('update-receipt');

    Route::delete('delete-receipt/{id}','UserReceiptsController@delete')->name('delete-receipt');

    // individual visa process
    Route::resource('visa-process','IndividualVisaProcessController');

    Route::post('visa-process/{id}','IndividualVisaProcessController@update')->name('visa-process-update');

    Route::post('individual-visa-process/{id}','IndividualVisaProcessController@send_request')->name('individual-visa-process');

    // Route::resource('document', 'DocumentController');



    /** All security routes */

    Route::get('faqs', 'SecurityController@faq')->name('faqs');

    Route::get('about-us', 'SecurityController@aboutUs')->name('about-us');

    Route::get('privacy-policy', 'SecurityController@privacyPolicy')->name('privacy-policy');

    Route::get('term&condition', 'SecurityController@termCondition')->name('term-condition');

});

//privacy-policy
     Route::get('/privacy-policy-page', [AuthController::class, 'privacyPolicyPage']);

    Route::get('homepage',[App\Http\Controllers\AuthController::class,'homePage'])->name('homepage');

    Route::get('employee/dashboard', [App\Http\Controllers\User\HomeController::class,'employee'])->name('employee.dashboard');
    Route::get('individual/dashboard',[App\Http\Controllers\User\HomeController::class,'individual'])->name('individual.dashboard');




