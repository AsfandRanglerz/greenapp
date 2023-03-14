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

Route::get('/admin', [AuthController::class, 'getLoginPage']);

Route::post('admin/login', [AuthController::class, 'Login']);

Route::get('/admin-forgot-password', [AdminController::class, 'forgetPassword']);

Route::post('/admin-reset-password-link', [AdminController::class, 'adminResetPasswordLink']);

Route::get('/change_password/{id}', [AdminController::class, 'change_password']);

Route::post('/admin-reset-password', [AdminController::class, 'ResetPassword']);

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('dashboard', [AdminController::class, 'getdashboard']);

    Route::get('profile', [AdminController::class, 'getProfile']);

    Route::post('update-profile', [AdminController::class, 'update_profile']);

    Route::post('update-password', [AdminController::class, 'profile_change_password'])->name('profile.change-password');

    Route::get('Privacy-policy', [SecurityController::class, 'PrivacyPolicy']);

    Route::get('privacy-policy-edit', [SecurityController::class, 'PrivacyPolicyEdit']);

    Route::post('privacy-policy-update', [SecurityController::class, 'PrivacyPolicyUpdate']);

    Route::get('term-condition', [SecurityController::class, 'TermCondition']);

    Route::get('term-condition-edit', [SecurityController::class, 'TermConditionEdit']);

    Route::post('term-condition-update', [SecurityController::class, 'TermConditionUpdate']);

    Route::get('logout', [AdminController::class, 'logout']);

    /** Company routes  */

    Route::resource('company', CompanyController::class);

    Route::get('company-document-index/{id}', [CompanyDocumentController::class, 'index'])->name('company-document.index');

    Route::get('company-document-create/{id}', [CompanyDocumentController::class, 'create'])->name('company-document.create');

    Route::post('company-document-store/{id}', [CompanyDocumentController::class, 'store'])->name('company-document.store');

    Route::get('company-document-destroy/{id}', [CompanyDocumentController::class, 'destroy'])->name('company-document.destroy');

    Route::get('company-document-edit/{id}', [CompanyDocumentController::class, 'edit'])->name('company-document.edit');

    Route::post('company-document-update/{id}', [CompanyDocumentController::class, 'update'])->name('company-document.update');

    Route::get('company-document-download/{id}', [CompanyDocumentController::class, 'download'])->name('company-document.download');

    /** User routes  */

    Route::resource('user', UserController::class);

    Route::get('user-document-index/{id}', [UserDocumentController::class, 'index'])->name('user-document.index');

    Route::get('user-document-create/{id}', [UserDocumentController::class, 'create'])->name('user-document.create');

    Route::post('user-document-store/{id}', [UserDocumentController::class, 'store'])->name('user-document.store');

    Route::get('user-document-destroy/{id}', [UserDocumentController::class, 'destroy'])->name('user-document.destroy');

    Route::get('user-document-edit/{id}', [UserDocumentController::class, 'edit'])->name('user-document.edit');

    Route::post('user-document-update/{id}', [UserDocumentController::class, 'update'])->name('user-document.update');

    Route::resource('faq', FaqController::class);

    Route::resource('inquiry', InquiryController::class);

    Route::resource('selfemployee', SelfUserController::class);

    Route::resource('about-us', AboutUsController::class);

    Route::resource('privacy-policy', PrivacyPolicyController::class);

    Route::resource('term-condition', TermConditionController::class);

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

Route::group(['prefix' => 'company', 'namespace' => 'App\Http\Controllers\Company', 'middleware' => 'company', 'as' => 'company.'], function () {

    Route::get('logout', 'HomeController@logout')->name('logout');

    Route::get('dashboard', 'HomeController@index')->name('dashboard');

    Route::resource('profile', 'ProfileController');

    Route::resource('employee', 'EmployeeController');

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

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\User', 'middleware' => 'user', 'as' => 'user.'], function () {

    Route::get('logout', 'HomeController@logout')->name('logout');

    Route::get('dashboard', 'HomeController@index')->name('dashboard');

    Route::resource('profile', 'ProfileController');

    Route::get('change-password', 'ProfileController@changePassword_index')->name('changePassword.index');

    Route::post('change-password', 'ProfileController@changePassword')->name('changePassword');

    Route::resource('document', 'DocumentController');

    Route::get('documentDownload/{id}', 'DocumentController@download')->name('document.download');

    Route::resource('inquiry', 'InquiryController');

    /** All security routes */

    Route::get('faqs', 'SecurityController@faq')->name('faqs');

    Route::get('about-us', 'SecurityController@aboutUs')->name('about-us');

    Route::get('privacy-policy', 'SecurityController@privacyPolicy')->name('privacy-policy');

    Route::get('term&condition', 'SecurityController@termCondition')->name('term-condition');

});

//privacy-policy
     Route::get('/privacy-policy-page', [AuthController::class, 'privacyPolicyPage']);
