<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\AmaniController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SubscribersController;

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

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

// Route::get('/', function () {
//     return view('auth.login');
// });

// ----------------------------login ------------------------------//
Route::controller(AmaniController::class)->group(function () {
    Route::get('/', 'index')->name('blogIndex');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogDetails', 'blogDetails')->name('blogDetails');
    Route::get('singleBlog/{id}', 'singleBlog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('blogsByCategory/{id}', 'blogsByCategory');
    Route::post('/comment', 'storeComment')->name('storeComment');
    Route::post('/subscriber', 'storeSubscriber')->name('storeSubscriber');
    Route::get('/disclaimer', 'disclaimer')->name('disclaimer');
    Route::get('/about', 'about')->name('about');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy', 'privacy')->name('privacy');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->middleware('auth')->name('student/dashboard');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');

});


// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student

});

// ------------------------ Blogs -------------------------------//
Route::controller(ArticleController::class)->group(function () {
    Route::get('articles/list', 'index')->middleware('auth')->name('articles/list');
    Route::get('articles/add', 'addBlog')->middleware('auth')->name('articles/addBlog');
    Route::post('article/save', 'articleSave')->name('article.save'); // save record student
    Route::get('article/edit/{id}', 'articleEdit'); // view for edit
    Route::get('article/view/{id}', 'showArticle'); // view for edit
    Route::get('articles/tags', 'tags')->name('articles.tags');
    Route::post('tags/store', 'storeTag')->name('store.tag');
    Route::get('update/status/{id}', 'updateArticleStatus');//Update Status
    Route::get('deactivate/status/{id}', 'deactivateArticleStatus');//Update Status
    Route::post('/delete', 'deleteArticle')->name('deleteArticle'); 
    //Comments
    Route::get('publish/comment/{id}', 'publishComment');//Update Status
});

// ------------------------ Blogs -------------------------------//
Route::controller(SubscribersController::class)->group(function () {
    Route::get('subscribers/list', 'index')->middleware('auth')->name('subscribers/list'); 
});
