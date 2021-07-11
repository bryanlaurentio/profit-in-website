<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::put('/profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');


// Auth::routes();
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::resource('profile', '\App\Http\Controllers\ProfileController');

Route::group(['middleware' => 'auth'], function () {
//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
//Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
Route::get('map', function () {return view('pages.maps');})->name('map');
Route::get('icons', function () {return view('pages.icons');})->name('icons');
Route::get('table-list', function () {return view('pages.tables');})->name('table');
//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


//materi
Route::get('material', [App\Http\Controllers\MaterialController::class, 'displayHalamanMateri'])->name('materials')->middleware('auth');

Route::get('material/detailMaterial/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'displayHalamanDetailMateri'])->name('materials.displayHalamanDetailMateri')->middleware('auth');

Route::get('material/displayHalamanUploadMateri', [App\Http\Controllers\MaterialController::class, 'displayHalamanUploadMateri'])->name('materials.displayHalamanUploadMateri')->middleware('auth');;
Route::post('material/displayHalamanUploadMateri/storeMaterial', [App\Http\Controllers\MaterialController::class, 'addMaterial'])->name("materials.displayHalamanUploadMateri.storeMaterial")->middleware('auth');;

Route::get('material/displayHalamanEditMateri/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'displayHalamanEditMateri'])->name('materials.displayHalamanEditMateri')->middleware('auth');;
Route::patch('material/displayHalamanEditMateri/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'editMaterial'])->name('materials.displayHalamanEditMateri.editMaterial')->middleware('auth');;

Route::delete('material.delete.{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'deleteMaterial'])->name('materials.deleteMaterial')->middleware('auth');;


// Forum Diskusi
Route::get('forumDiskusi', [App\Http\Controllers\DiscussionTopicController::class, 'index'])->name('forumDiskusi');
Route::get('forumDiskusi/createDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormCreateDiscussionTopic'])->name('forumDiskusi.createDiscussionTopic');
Route::post('forumDiskusi/createDiscussionTopic/storeDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'createDiscussionTopic'])->name("forumDiskusi.createDiscussionTopic.storeDiscussionTopic");
Route::get('forumDiskusi/topikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayDetailDiscussionTopic']);
Route::get('forumDiskusi/topikDiskusi/buatJawaban/{codeOfTopic}', [App\Http\Controllers\AnswerController::class, 'displayFormCreateAnswer']);
Route::post('forumDiskusi/createAnswer/storeAnswer', [App\Http\Controllers\AnswerController::class, 'storeAnswer']);
Route::get('forumDiskusi/topikDiskusi/buatKomentar/{codeOfTopic}', [App\Http\Controllers\CommentController::class, 'displayFormCreateComment']);
Route::post('forumDiskusi/createAnswer/storeComment', [App\Http\Controllers\CommentController::class, 'storeComment']);
Route::get('forumDiskusi/editTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormEditDiscussionTopic']);
Route::post('forumDiskusi/editTopikDiskusi/updateTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'updateDiscussionTopic']);
Route::get('forumDiskusi/delete/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'deleteDiscussionTopic']);



// Live Tutor
Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor');
Route::get('liveTutor/createLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'displayFormCreateLiveTutor'])->name('liveTutor.createLiveTutor');
Route::post('liveTutor/createLiveTutor/storeLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'createLiveTutor'])->name("liveTutor.createLiveTutor.storeLiveTutor");
// ini rencananya halaman live tutor untuk Pengguna Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor');
Route::get('liveTutor/detailLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanDetailLiveTutor'])->name('liveTutor.displayHalamanDetailLiveTutor');

Route::get('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanEditLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor');
Route::patch('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'editLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor.editLiveTutor');

Route::delete('liveTutor/delete/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'deleteLiveTutor'])->name('liveTutor.deleteLiveTutor');


//Membership
Route::get('membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership');
