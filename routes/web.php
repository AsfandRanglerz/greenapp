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
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\SelfUserController;
use App\Http\Controllers\Admin\UserDocumentController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\CompanyDocumentController;
use App\Http\Controllers\Admin\SendAllNotificationController;
use App\Http\Controllers\Admin\ServicesResponseController;
use App\Http\Controllers\Admin\SubAdminController;



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

    Route::get('dashboard', [AdminController::class, 'getdashboard'])->middleware('permission:Dashboard');

    Route::get('profile', [AdminController::class, 'getProfile']);

    Route::post('note', [AdminController::class, 'note_update'])->name('note.update');

    Route::post('update-profile', [AdminController::class, 'update_profile']);

    Route::post('update-password', [AdminController::class, 'profile_change_password'])->name('profile.change-password');

    Route::get('Privacy-policy', [SecurityController::class, 'PrivacyPolicy'])->middleware('permission:Privacy Policy');

    Route::get('privacy-policy-edit', [SecurityController::class, 'PrivacyPolicyEdit'])->middleware('permission:Privacy Policy');

    Route::post('privacy-policy-update', [SecurityController::class, 'PrivacyPolicyUpdate'])->middleware('permission:Privacy Policy');

    Route::get('term-condition', [SecurityController::class, 'TermCondition'])->middleware('permission:Terms & Conditions');

    Route::get('term-condition-edit', [SecurityController::class, 'TermConditionEdit'])->middleware('permission:Terms & Conditions');

    Route::post('term-condition-update', [SecurityController::class, 'TermConditionUpdate'])->middleware('permission:Terms & Conditions');

    Route::get('logout', [AdminController::class, 'logout']);

    //Sub-Admin routes
    Route::get('get-sub-admins', [SubAdminController::class, 'index'])->name('get-sub-admins')->middleware('permission:Sub Admin');

    Route::get('create-sub-admin', [SubAdminController::class, 'create'])->name('create-sub-admin')->middleware('permission:Sub Admin');

    Route::post('add-sub-admin', [SubAdminController::class, 'store'])->name('add-sub-admin')->middleware('permission:Sub Admin');

    Route::post('add-sub-admin-permission/{id}', [SubAdminController::class, 'add_permission'])->name('add-sub-admin-permission')->middleware('permission:Sub Admin');

    Route::get('update-sub-admin-permission/{id}', [SubAdminController::class, 'update_permission'])->name('update-sub-admin-permission')->middleware('permission:Sub Admin');

    Route::get('edit-sub-admin/{id}', [SubAdminController::class, 'edit'])->name('edit-sub-admin')->middleware('permission:Sub Admin');

    Route::post('update-sub-admin/{id}', [SubAdminController::class, 'update'])->name('update-sub-admin')->middleware('permission:Sub Admin');

    Route::delete('delete-sub-admin/{id}', [SubAdminController::class, 'delete'])->name('delete-sub-admin')->middleware('permission:Sub Admin');


    // Notifications Routes
    Route::get('notification-index', [SendAllNotificationController::class, 'index'])->name('notification-index')->middleware('permission:Notifications');

    Route::post('send-notification', [SendAllNotificationController::class, 'send_notification'])->name('send-notification')->middleware('permission:Notifications');

    // Services Response
    Route::get('get-services-requests', [ServicesResponseController::class, 'get_services_requests'])->name('get-services-requests')->middleware('permission:Services');

    Route::get('response-against-requests/{id}', [ServicesResponseController::class, 'response_to_request'])->name('response-against-requests')->middleware('permission:Services');

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

    Route::resource('faq', FaqController::class)->middleware('permission:Employees');

    Route::resource('inquiry', InquiryController::class)->middleware('permission:Employees');

    Route::resource('selfemployee', SelfUserController::class)->middleware('permission:Individuals');

    Route::get('self-employee-view', [SelfUserController::class, 'view'])->middleware('permission:Individuals');

    Route::resource('about-us', AboutUsController::class)->middleware('permission:About us');

    Route::resource('privacy-policy', PrivacyPolicyController::class)->middleware('permission:Privacy Policy');

    Route::resource('term-condition', TermConditionController::class)->middleware('permission:Terms & Conditions');

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

    Route::delete('request-delete/{id}','IndividualServicesController@delete_request')->name('request-delete');

    Route::get('get-dependent','DependentController@index')->name('get-dependent');

    Route::get('create-dependent','DependentController@create')->name('create-dependent');



    /** All security routes */

    Route::get('faqs', 'SecurityController@faq')->name('faqs');

    Route::get('about-us', 'SecurityController@aboutUs')->name('about-us');

    Route::get('privacy-policy', 'SecurityController@privacyPolicy')->name('privacy-policy');

    Route::get('term&condition', 'SecurityController@termCondition')->name('term-condition');

});

//privacy-policy
     Route::get('/privacy-policy-page', [AuthController::class, 'privacyPolicyPage']);
