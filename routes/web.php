<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompanyDocumentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserDocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DocumentController;
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
/*Admin routes
 * */
Route::get('/admin', [AuthController::class, 'getLoginPage']);
Route::post('/login', [AuthController::class, 'Login']);
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
//    Company
    Route::resource('company', CompanyController::class);
    Route::get('company-document-index/{id}', [CompanyDocumentController::class, 'index'])->name('company-document.index');
    Route::get('company-document-create/{id}', [CompanyDocumentController::class, 'create'])->name('company-document.create');
    Route::post('company-document-store/{id}', [CompanyDocumentController::class, 'store'])->name('company-document.store');
    Route::get('company-document-destroy/{id}', [CompanyDocumentController::class, 'destroy'])->name('company-document.destroy');
    Route::get('company-document-edit/{id}', [CompanyDocumentController::class, 'edit'])->name('company-document.edit');
    Route::post('company-document-update/{id}', [CompanyDocumentController::class, 'update'])->name('company-document.update');
    Route::get('company-document-download/{id}', [CompanyDocumentController::class, 'download'])->name('company-document.download');
    //  User
    Route::resource('user', UserController::class);
    Route::get('user-document-index/{id}', [UserDocumentController::class, 'index'])->name('user-document.index');
    Route::get('user-document-create/{id}', [UserDocumentController::class, 'create'])->name('user-document.create');
    Route::post('user-document-store/{id}', [UserDocumentController::class, 'store'])->name('user-document.store');
    Route::get('user-document-destroy/{id}', [UserDocumentController::class, 'destroy'])->name('user-document.destroy');
    Route::get('user-document-edit/{id}', [UserDocumentController::class, 'edit'])->name('user-document.edit');
    Route::post('user-document-update/{id}', [UserDocumentController::class, 'update'])->name('user-document.update');
    // Route::resource('company-document', CompanyDocumentController::class)->parameters([
    //     'company-document' => 'company_id'
    // ]);
    Route::resource('faq', FaqController::class);
    Route::resource('about-us', AboutUsController::class);
    Route::resource('privacy-policy', PrivacyPolicyController::class);
    Route::resource('term-condition', TermConditionController::class);
});

/**User & Company panel */
Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    /**Authentication route */
    Route::view('forget-password', 'auth.forget-password');
    Route::view('register', 'auth.register');
    Route::post('company/register', 'AuthController@register')->name('company.register');
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', 'AuthController@login')->name('user.login');
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::group(['middleware' => 'company'], function () {

        Route::get('home', 'HomeController@index')->name('home');
        /**Company routes */
        Route::resource('companyProfile', 'CompanyProfileController');
        Route::post('companyProfile-password', 'CompanyProfileController@changePassword')->name('companyProfile.changePassword');
        Route::resource('employee', 'EmployeeController');
        Route::resource('employeeDocument', 'EmployeeDocumentController');
        Route::get('employeeDownload/{id}', 'EmployeeDocumentController@download')->name('employeeDocument.download');
        Route::resource('companyDocument', 'CompanyDocumentController');
        Route::get('companyDownload/{id}', 'CompanyDocumentController@download')->name('companyDocument.download');
        /**Employee routes */
        Route::resource('EmployeeProfile', 'EmployeeProfileController');
        Route::post('EmployeeProfile-password', 'EmployeeProfileController@changePassword')->name('EmployeeProfile.changePassword');
        Route::resource('document', 'DocumentController');
        Route::get('documentDownload/{id}', [DocumentController::class, 'download'])->name('document.download');

        /** All security routes */
        Route::get('faqs', 'SecurityController@faq')->name('faqs');
        Route::get('about-us', 'SecurityController@aboutUs')->name('about-us');
        Route::get('privacy-policy', 'SecurityController@privacyPolicy')->name('privacy-policy');
        Route::get('term&condition', 'SecurityController@termCondition')->name('term-condition');
    });
});
