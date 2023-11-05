<?php

// use App\Http\Controllers\Admin\ProjectController;

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CardSlideController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DevelopmentStatusController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\FrontSettingController;
use App\Http\Controllers\Front\DonationController;
use App\Http\Controllers\Front\FundController;
use App\Http\Controllers\Front\Home;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\RegisterController;

use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\NewAndUpdateController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectTypeController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubLeadController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\UserController as FrontUserController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\RequestDocumentController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\HomeController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect('/home');
// })->name('home.index');
Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('view:clear');


    return "Cleared!";
});


// Route::get('/home', [FrontHomeController::class, 'index'])->name('front');


Auth::routes();
Auth::routes(['register' => false]);
Route::get('verify/resend', [App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');
Route::resource('verify', App\Http\Controllers\Auth\TwoFactorController::class)->only(['index', 'store']);
Route::post('user-register', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('user-register');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::group(['prefix' => 'users', 'as' => 'users.', 'middleware' => ['auth', 'user']], function () {
    Route::get('/dashboard', [FrontUserController::class, 'userDashboard'])->name('dashboard');
    // Route::get('/', [DashboardController::class, 'userDashboard'])->name('dashboard');
    Route::get('/', function () {
        return redirect()->route('users.dashboard');
    });
    // Route::view('/', 'user.dashboard');
    Route::get('/edit-profile', [FrontUserController::class, 'editProfile'])->name('editProfile');
    // Route::get('upload-documents', [UsersController::class, 'createDocumentByUser'])->name('upload-documents');
    // Route::post('submit-document', [FrontUserController::class, 'submitDocument'])->name('submit-document');
    Route::put('/update-profile/{user}', [FrontUserController::class, 'updateProfile'])->name('updateProfile');
    Route::post('delete-educational-document', [FrontUserController::class, 'deleteEducationDocument'])->name('document-educational.delete');
    Route::post('delete-general-document', [FrontUserController::class, 'deleteGeneralDocument'])->name('document-general.delete');
    Route::get('educational-documents', [FrontUserController::class, 'educationalDocument'])->name('eduactional-documents');
    Route::get('general-documents', [FrontUserController::class, 'generalDocument'])->name('general-documents');
    Route::get('create-general-documents', [FrontUserController::class, 'createGeneralDocument'])->name('create-general-documents');
    Route::get('create-educational-documents', [FrontUserController::class, 'createEducationalDocument'])->name('create-educational-documents');
    Route::post('store-general-documents', [FrontUserController::class, 'storeGeneralDocument'])->name('store-general-documents');
    Route::post('store-educational-documents', [FrontUserController::class, 'storeEducationalDocument'])->name('store-educational-documents');
    Route::get('/document-request', [UsersController::class, 'documentRequest'])->name('document-request');
    Route::post('/document-request', [usersController::class, 'documentRequestStore'])->name('document-request-store');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'twofactor', 'auth-admin']], function () {

    Route::get('/', [DashboardController::class, 'root'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'index'])->name('home.indexs');


    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    Route::resource('document-request', RequestDocumentController::class);
    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);
    Route::get('general-document/{id}', [UsersController::class, 'createDocument'])->name('users.create-document');
    // ============================
    Route::get('view-documents/{id}', [UsersController::class, 'viewDocument'])->name('users.view-document');
    Route::get('educational-document/{id}', [UsersController::class, 'createDocument'])->name('users.educational-document');
    Route::get('general-document/{id}', [UsersController::class, 'createDocument'])->name('users.general-document');
    // ===================================================
    Route::post('upload/educational-document/{id}', [UsersController::class, 'uploadDocument'])->name('users.upload-educational-document');
    Route::post('upload/general-document/{id}', [UsersController::class, 'uploadDocument'])->name('users.upload-general-document');
    Route::post('delete-document', [UsersController::class, 'deleteDocument'])->name('users.document.delete');
    // ============================

    //newand updates
    Route::delete('news-updates/destroy', [NewAndUpdateController::class, 'massDestroy'])->name('news-updates.massDestroy');
    Route::resource('news-updates', NewAndUpdateController::class);

    //front setting
    Route::delete('front-setting/destroy', [FrontSettingController::class, 'massDestroy'])->name('front-setting.massDestroy');
    Route::resource('front-setting', FrontSettingController::class);
    Route::resource('forms', FormController::class);

    // for sliders
    Route::resource('sliders', SliderController::class);

    //for pages
    Route::resource('pages', PageController::class);

    Route::get('edit-page-content', [PageController::class, 'editPageContent']);

    Route::get('pages-content/page-listing-for-content', [PageController::class, 'listingPageContent'])->name('page-listing-for-content');

    Route::put('pages-content/page-update-for-content/{id}', [PageController::class, 'updatePageContentData'])->name('edit-page-content.update');

    Route::get('pages-content/page-edit-for-content/{id}', [PageController::class, 'editPageContentData'])->name('edit-page-content.edit');
    // following route for edit page introduction --- current only for home page
    Route::get('pages-introduction/page-listing-for-introduction', [PageController::class, 'listingPageIntro'])->name('page-listing-for-intro');
    Route::get('page-introduction/page-edit-for-introduction/{id}', [PageController::class, 'editPageIntroductionData'])->name('edit-page-introduction.edit');
    Route::put('page-content/page-update-for-introduction/{id}', [PageController::class, 'updatePageIntroductionData'])->name('edit-page-introduction.updatePageIntro');
    //============
    // for slides
    Route::get('slides/showAllById/{id}', [SlideController::class, 'slidesShowedBySlider'])->name('slides.showAllById');
    Route::get('cards/showAllById/{id}', [CardSlideController::class, 'slidesShowedByCards'])->name('cards.showCardsAllById');
    Route::resource('card-slides', CardSlideController::class);
    Route::get('card-slides/create/{id}', [CardSlideController::class, 'create']);

    Route::resource('slides', SlideController::class);
    Route::get('slides/create/{id}', [SlideController::class, 'create']);

    //    Settings
    Route::resource('settings', SettingsController::class)->only(['edit', 'update']);

    Route::resource('cards', CardController::class);

    // Update User Details
    Route::put('/update-profile/{user}', [HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/edit-profile', [HomeController::class, 'editProfile'])->name('editProfile');
    // user get requests

});



Route::get('sign-in', [LoginController::class, 'index'])->name('signIn');
Route::post('become-member', [RegisterController::class, 'becomeMember'])->name('becomeMember');
Route::view('sign-up', 'front.auth.sign_up')->name('signUp');
Route::post('user-sign-up', [RegisterController::class, 'signUp'])->name('user.signUp');

Route::get('governance', [FrontHomeController::class, 'governance']);
Route::get('policy', [FrontHomeController::class, 'policy']);
Route::get('who-we-work-with', [FrontHomeController::class, 'whoWeWorkWith']);
//admin
Route::get('edit-page-content', [FrontHomeController::class, 'editPageContent']);
Route::get('page-listing-forcontent', [FrontHomeController::class, 'listingPageContent']);
//admin
Route::get('career', [FrontHomeController::class, 'career']);
Route::get('what-we-do', [FrontHomeController::class, 'whatWeDo'])->name('what-we-do');
// 2nd option list
Route::get('the-code', [FrontHomeController::class, 'theCode']);
Route::get('revalidation', [FrontHomeController::class, 'revalidation']);
Route::get('standards-for-nurses', [FrontHomeController::class, 'standardsForNurses']);
Route::get('standards-for-midwives', [FrontHomeController::class, 'standardsForMidwives']);
Route::get('standards-for-nursing-associates', [FrontHomeController::class, 'standardsForNursingAssociates']);

Route::get('contacts-of-education-institutions', [FrontHomeController::class, 'contactsOfEducationInstitutions']);

// 3rd option list
Route::get('our-role-in-education', [FrontHomeController::class, 'ourRoleInEducation']);
Route::get('becoming-a-nurse-midwife-nursing-associate', [FrontHomeController::class, 'becomingANurseMidwifeNursingAssociate']);
Route::get('approved-programmes', [FrontHomeController::class, 'approvedProgrammes']);
Route::get('registration-forms', [FrontHomeController::class, 'registrationForms']);

// =================
Route::get('news-and-updates', [FrontHomeController::class, 'news'])->name('news');
Route::get('events', [FrontHomeController::class, 'events']);


Route::get('{any}', [App\Http\Controllers\Front\HomeController::class, 'home'])->name('home');
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


// password = $2y$10$w49Ze24K4nFdD61T.JvBb.RbWmj3ttiXT/ojde.tjCO...
