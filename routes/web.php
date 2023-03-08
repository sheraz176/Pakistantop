<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\PlacesController;
use App\Http\Controllers\Admin\LeadersController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\Leave_request_verificationController;
use App\Http\Controllers\Admin\Reference_informationController;
use App\Http\Controllers\Admin\RegulationsController;
use App\Http\Controllers\Admin\Religion_And_SocityController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\SocialiteAuthController;




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

// Route::get('/file-import',[UserController::class,
//             'importView'])->name('import-view');
//     Route::post('/import',[UserController::class,
//             'import'])->name('import');
//     Route::get('/export-users',[UserController::class,
//             'exportUsers'])->name('export-users');


Route::get('HrcabcEpakistanTop', [CustomAuthController::class, 'HrcabcEpakistanTop'])->name('HrcabcEpakistanTop');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('clogin', [CustomAuthController::class, 'index'])->name('clogin');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('cregister', [CustomAuthController::class, 'registration'])->name('cregister');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('auth/google');
Route::get('/auth/google-callback', [SocialiteAuthController::class, 'loginWithGoogle']);


Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');



Route::get('user/logout', function () {
    Auth::logout();
    return redirect()->route('HrcabcEpakistanTop');
})->name('user.logout');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');

    return "Cache cleared successfully";
 });

 Route::get('/config-cache', function () {
    Artisan::call('config:cache');

    return "Cache cleared successfully";
 });

 Route::get('/linkstorage', function () {
     Artisan::call('storage:link');
     return " cleared successfully";
 });

Route::get('/search', [FrontendController::class, 'search'])->name('main-site.home.search');

Route::get('/', [FrontendController::class, 'index'])->name('main-site.home.index');
Route::get('map-placemarks', [FrontendController::class, 'placeMarks'])->name('map.placemarks');
Route::get('object/{id}', [FrontendController::class, 'objectDetail'])->name('object.detail');
Route::get('/About', [FrontendController::class, 'about'])->name('main-site.pages.about');
Route::get('/Religious_Card', [FrontendController::class, 'religiouscard'])->name('main-site.pages.religiouscard');
Route::get('/News', [FrontendController::class, 'news'])->name('main-site.pages.news');
Route::get('/newsdetail/{id}/{slug}', [FrontendController::class, 'newsdetail'])->name('main-site.pages.news-details');
Route::get('/newsdetail/{id}', [FrontendController::class, 'newsdetail'])->name('main-site.pages.news-details');

Route::get('/Referenceinformation', [FrontendController::class, 'reference'])->name('main-site.pages.referenceinformation');
Route::get('/ReligionandSocity', [FrontendController::class, 'religion'])->name('main-site.pages.religionandsocity');
Route::get('/religiousdetails/{id}', [FrontendController::class, 'religiondetail'])->name('main-site.pages.religiousdetails');
Route::get('/religiousdetails/{id}/{slug}', [FrontendController::class, 'religiondetail'])->name('main-site.pages.religiousdetails');

Route::get('/Verification', [FrontendController::class, 'verification'])->name('main-site.pages.verification');
Route::get('/Video', [FrontendController::class, 'video'])->name('main-site.pages.video');
Route::get('/Regulations', [FrontendController::class, 'regulations'])->name('main-site.pages.regulations');
Route::post('/main/site/pages/verifications', [FrontendController::class, 'store'])->name('main-site.pages.verifications');
Route::get('/Leaders', [FrontendController::class, 'leader'])->name('main-site.pages.leader');
Route::get('/buildingshow', [FrontendController::class, 'buildingshow'])->name('main-site.pages.buildingshow');
Route::get('video/{id}', [FrontendController::class, 'videoDetail'])->name('video.detail');
Route::get('news/{id}', [FrontendController::class, 'NewspaperDetail'])->name('news_paper_detail');



Route::post('/session/set', [FrontendController::class, 'session_set'])->name('session.set');



Auth::routes();





Route::group(['middleware' => ['auth', 'role:Admin'],'prefix' => 'admin'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'news'], function () {
        Route::get('create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('index', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('show/{id}', [NewsController::class, 'show'])->name('admin.news.show');
        Route::get('edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::get('destroy/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');


    });
    Route::group(['prefix' => 'religion_and_socity'], function () {
        Route::get('create', [religion_and_socityController::class, 'create'])->name('admin.religion_and_socity.create');
        Route::post('store', [religion_and_socityController::class, 'store'])->name('admin.religion_and_socity.store');
        Route::get('index', [religion_and_socityController::class, 'index'])->name('admin.religion_and_socity.index');
        Route::get('show/{id}', [religion_and_socityController::class, 'show'])->name('admin.religion_and_socity.show');
        Route::get('edit/{id}', [religion_and_socityController::class, 'edit'])->name('admin.religion_and_socity.edit');
        Route::post('update/{id}', [religion_and_socityController::class, 'update'])->name('admin.religion_and_socity.update');
        Route::get('destroy/{id}', [religion_and_socityController::class, 'destroy'])->name('admin.religion_and_socity.destroy');
    });


    Route::group(['prefix' => 'video'], function () {
        Route::get('create', [VideoController::class, 'create'])->name('admin.video.create');
        Route::post('store', [VideoController::class, 'store'])->name('admin.video.store');
        Route::get('index', [VideoController::class, 'index'])->name('admin.video.index');
        Route::get('show/{id}', [VideoController::class, 'show'])->name('admin.video.show');
        Route::get('edit/{id}', [VideoController::class, 'edit'])->name('admin.video.edit');
        Route::post('update/{id}', [VideoController::class, 'update'])->name('admin.video.update');
        Route::delete('destroy/{id}', [VideoController::class, 'destroy'])->name('admin.video.destroy');
    });

    Route::group(['prefix' => 'leave_request_verification'], function () {
        Route::get('create', [Leave_request_verificationController::class, 'create'])->name('admin.leave_request_verification.create');
        Route::post('store', [Leave_request_verificationController::class, 'store'])->name('admin.leave_request_verification.store');
        Route::get('index', [Leave_request_verificationController::class, 'index'])->name('admin.leave_request_verification.index');
        Route::get('show/{id}', [Leave_request_verificationController::class, 'show'])->name('admin.leave_request_verification.show');
        Route::get('edit/{id}', [Leave_request_verificationController::class, 'edit'])->name('admin.leave_request_verification.edit');
        Route::post('update/{id}', [Leave_request_verificationController::class, 'update'])->name('admin.leave_request_verification.update');
        Route::get('destroy/{id}', [Leave_request_verificationController::class, 'destroy'])->name('admin.leave_request_verification.destroy');
    });
    Route::group(['prefix' => 'reference_information'], function () {
        Route::get('create', [reference_informationController::class, 'create'])->name('admin.reference_information.create');
        Route::post('store', [reference_informationController::class, 'store'])->name('admin.reference_information.store');
        Route::get('index', [reference_informationController::class, 'index'])->name('admin.reference_information.index');
        Route::get('show/{id}', [reference_informationController::class, 'show'])->name('admin.reference_information.show');
        Route::get('edit/{id}', [reference_informationController::class, 'edit'])->name('admin.reference_information.edit');
        Route::post('update/{id}', [reference_informationController::class, 'update'])->name('admin.reference_information.update');
        Route::get('destroy/{id}', [reference_informationController::class, 'destroy'])->name('admin.reference_information.destroy');
    });
    Route::group(['prefix' => 'regulations'], function () {
        Route::get('create', [RegulationsController::class, 'create'])->name('admin.regulations.create');
        Route::post('store', [RegulationsController::class, 'store'])->name('admin.regulations.store');
        Route::get('index', [RegulationsController::class, 'index'])->name('admin.regulations.index');
        Route::get('show/{id}', [RegulationsController::class, 'show'])->name('admin.regulations.show');
        Route::get('edit/{id}', [RegulationsController::class, 'edit'])->name('admin.regulations.edit');
        Route::post('update/{id}', [RegulationsController::class, 'update'])->name('admin.regulations.update');
        Route::get('destroy/{id}', [RegulationsController::class, 'destroy'])->name('admin.regulations.destroy');
    });

    Route::group(['prefix' => 'area'], function () {
        Route::get('create', [AreaController::class, 'create'])->name('admin.area.create');
        Route::post('store', [AreaController::class, 'store'])->name('admin.area.store');
        Route::get('index', [AreaController::class, 'index'])->name('admin.area.index');
        Route::get('edit/{id}', [AreaController::class, 'edit'])->name('admin.area.edit');
        Route::post('update/{id}', [AreaController::class, 'update'])->name('admin.area.update');
        Route::get('destroy/{id}', [AreaController::class, 'destroy'])->name('admin.area.destroy');


    });

    Route::group(['prefix' => 'places'], function () {
        Route::get('create', [PlacesController::class, 'create'])->name('admin.places.create');
        Route::post('store', [PlacesController::class, 'store'])->name('admin.places.store');
        Route::get('index', [PlacesController::class, 'index'])->name('admin.places.index');
        Route::get('edit/{id}', [PlacesController::class, 'edit'])->name('admin.places.edit');
        Route::post('update/{id}', [PlacesController::class, 'update'])->name('admin.places.update');
        Route::get('destroy/{id}', [PlacesController::class, 'destroy'])->name('admin.places.destroy');
        Route::get('leader/{id}', [PlacesController::class, 'leader'])->name('admin.place.leader');

        Route::group(['prefix' => 'leaders'], function () {
            Route::get('create/{place_id}', [LeadersController::class, 'create'])->name('admin.leader.create');
            Route::post('store', [LeadersController::class, 'store'])->name('admin.leader.store');
            Route::get('edit/{id}', [LeadersController::class, 'edit'])->name('admin.leader.edit');
            Route::post('update/{id}', [LeadersController::class, 'update'])->name('admin.leader.update');
            Route::get('destroy/{id}', [LeadersController::class, 'destroy'])->name('admin.leader.destroy');
            Route::get('index', [LeadersController::class, 'index'])->name('admin.leader.index');
            Route::get('leaderdetail/{id}', [LeadersController::class, 'show'])->name('leader.leaderdetail');



        });


    });





    });


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
