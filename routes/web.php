<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MceProfileController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminMceProfileController;
use App\Http\Controllers\admin\MceFormController;
use App\Http\Controllers\admin\AdminJobsController;
use App\Http\Controllers\admin\AdminInvitationController;
use App\Http\Controllers\admin\AdminEventsController;

use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserInvitationController;
use App\Http\Controllers\user\UserMCEProfileController;
use App\Http\Controllers\user\UserProfileController;

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/mce_profile', [MceProfileController::class, 'index']);
Route::get('/serach_profiles', [MceProfileController::class, 'serach_profiles']);
Route::get('/view_mce_profile/{id}', [MceProfileController::class, 'view_mce_profile'])->name('view_mce_profile');


Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/job_detail/{id}',[JobsController::class, 'job_detail']);

Route::get('/events', [EventsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Auth::routes();

//Admin routes
Route::group(['prefix' => 'admin','middleware'=>['isAdmin','auth','PreventBackHistory']], function() {
    Route::get('dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');
    
    //Users routes
    Route::get('users',[AdminUserController::class,'users'])->name('admin.users');
    Route::get('active_user/{user_id}',[AdminUserController::class,'active_user'])->name('admin.active_user');
    Route::get('inactive_user/{user_id}',[AdminUserController::class,'inactive_user'])->name('admin.inactive_user');
    
    //MCE Profile routes
    Route::get('mce_profile',[AdminMceProfileController::class,'index'])->name('admin.mce_profile');
    Route::get('view_mce_profile/{id}',[AdminMceProfileController::class,'view_mce_profile'])->name('admin.view_mce_profile');
    Route::post('review_mce_profile/{id}',[AdminMceProfileController::class,'review_mce_profile'])->name('admin.review_mce_profile');
    Route::get('mce_form',[MceFormController::class,'index'])->name('admin.mce_form');
    
    //Designation routes
    Route::post('add-designation',[MceFormController::class,'add_designation'])->name('admin.add_designation');
    Route::get('active_designation/{designation_id}',[MceFormController::class,'active_designation'])->name('admin.active_designation');
    Route::get('inactive_designation/{designation_id}',[MceFormController::class,'inactive_designation'])->name('admin.inactive_designation');

    //City routes
    Route::post('add-city',[MceFormController::class,'add_city'])->name('admin.add_city');
    Route::get('active_city/{city_id}',[MceFormController::class,'active_city'])->name('admin.active_city');
    Route::get('inactive_city/{city_id}',[MceFormController::class,'inactive_city'])->name('admin.inactive_city');

    //Degree routes
    Route::post('add-degree',[MceFormController::class,'add_degree'])->name('admin.add_degree');
    Route::get('active_degree/{degree_id}',[MceFormController::class,'active_degree'])->name('admin.active_degree');
    Route::get('inactive_degree/{degree_id}',[MceFormController::class,'inactive_degree'])->name('admin.inactive_degree');
    
    //Jobs routes
    Route::get('jobs',[AdminJobsController::class,'index'])->name('admin.jobs');
    Route::get('add_new_job',[AdminJobsController::class,'add_new_job'])->name('admin.add_new_job');
    Route::post('add_job',[AdminJobsController::class,'add_job'])->name('admin.add_job');
    Route::get('active_job/{id}',[AdminJobsController::class,'active_job'])->name('admin.active_job');
    Route::get('inactive_job/{id}',[AdminJobsController::class,'inactive_job'])->name('admin.inactive_job');
    Route::get('edit_job/{id}',[AdminJobsController::class,'edit_job'])->name('admin.edit_job');
    Route::post('update_job/{id}',[AdminJobsController::class,'update_job'])->name('admin.update_job');




    //Invitation routes
    Route::get('invitation',[AdminInvitationController::class,'index'])->name('admin.invitation');
    Route::get('add_new_invitation',[AdminInvitationController::class, 'add_new_invitation'])->name('admin.add_new_invitation');
    Route::post('add_invitation',[AdminInvitationController::class, 'add_invitation'])->name('admin.add_invitation');
    
    //Events routes
    Route::get('events',[AdminEventsController::class,'index'])->name('admin.events');
    Route::get('add_new_event',[AdminEventsController::class,'add_new_event'])->name('admin.add_new_event');
    Route::get('active_event/{id}',[AdminEventsController::class,'active_event'])->name('admin.active_event');
    Route::get('inactive_event/{id}',[AdminEventsController::class,'inactive_event'])->name('admin.inactive_event');
    Route::post('add_event',[AdminEventsController::class,'add_event'])->name('admin.add_event');
    Route::get('edit_event/{id}',[AdminEventsController::class,'edit_event'])->name('admin.edit_event');
    Route::post('update_event/{id}',[AdminEventsController::class,'update_event'])->name('admin.update_event');

});


//User routes
Route::group(['prefix' => 'user','middleware'=>['isUser','auth','PreventBackHistory']], function() {
    Route::get('dashboard',[UserDashboardController::class,'index'])->name('user.dashboard');
    
    //MCE profile routes
    Route::get('mce_profile',[UserMCEProfileController::class,'index'])->name('user.mce_profile');
    Route::get('mce_form',[UserMCEProfileController::class,'mce_form'])->name('user.mce_form');
    Route::post('submit_mce_profile',[UserMCEProfileController::class,'submit_mce_profile'])->name('user.submit_mce_profile');
    
    
    
    Route::get('invitation',[UserInvitationController::class,'index'])->name('user.invitation');
    Route::get('profile',[UserProfileController::class,'index'])->name('user.profile');




});









