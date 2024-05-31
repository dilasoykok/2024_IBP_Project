<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\AdminPanel\CommunicationController;
use App\Http\Controllers\AdminPanel\DuyuruController;
use App\Http\Controllers\AdminPanel\ServiceController;
use App\Http\Controllers\AdminPanel\UsersController;
use App\Http\Controllers\UserCheckController;
use App\Http\Controllers\UserPanel\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('admin.login');});
Route::view('/login', 'admin.login')->name('login');
Route::view('/', 'admin.login');
Route::view('/register', 'admin.register')->name('register');
Route::post('/registerStore', [UserCheckController::class, 'registerStore'])->name('registerStore');
Route::post('/checkUser', [UserCheckController::class, 'checkUser'])->name('checkUser');
Route::get('/logout', [UserCheckController::class, 'logout'])->name('logout');
Route::post('/updateUserPass/{id}', [UserCheckController::class, 'updateUserPass'])->name('updateUserPass');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::middleware('admin')->group(function () {

        Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin');

//--------------------------  Admin Service ------------------------
        Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service');
        Route::get('/admin/service/destroy/{id}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
        Route::get('/admin/service/show/{id}', [ServiceController::class, 'show'])->name('admin.service.show');
        Route::get('/admin/service/edit/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::post('/admin/service/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('admin.service.create');
        Route::post('/admin/service/searchService', [ServiceController::class, 'searchService'])->name('admin.service.searchService');

//----------------------------  Admin Communacation -------------------------------
        Route::get('/admin/message', [CommunicationController::class, 'index'])->name('admin.message');
        Route::get('/admin/message/show/{id}', [CommunicationController::class, 'show'])->name('admin.message.show');
        Route::post('/admin/message/update/{id}', [CommunicationController::class, 'update'])->name('admin.message.update');

//----------------------------  Admin Users -------------------------------
        Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
        Route::get('/admin/users/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('/admin/users/show/{id}', [UsersController::class, 'show'])->name('admin.users.show');
        Route::get('/admin/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
        Route::post('/admin/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
        Route::post('/admin/users/store', [UsersController::class, 'store'])->name('admin.users.store');
        Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');


        //******************** Admin Duyuru ********************
        Route::get('/admin/notice', [DuyuruController::class, 'index'])->name('admin.notice');
        Route::get('/admin/notice/create', [DuyuruController::class, 'create'])->name('admin.notice.create');
        Route::post('/admin/notice/store', [DuyuruController::class, 'store'])->name('admin.notice.store');
        Route::get('/admin/notice/edit/{id}', [DuyuruController::class, 'edit'])->name('admin.notice.edit');
        Route::get('/admin/notice/show/{id}', [DuyuruController::class, 'show'])->name('admin.notice.show');
        Route::post('/admin/notice/update/{id}', [DuyuruController::class, 'update'])->name('admin.notice.update');
        Route::get('/admin/notice/destroy/{id}', [DuyuruController::class, 'destroy'])->name('admin.notice.destroy');


    });
    Route::middleware(['auth', 'user'])->group(function () {
//****************** user panel ***********************************
        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/user/service', [UserController::class, 'services'])->name('user.service');
        Route::get('/user/showService/{id}', [UserController::class, 'showService'])->name('user.showService');
        Route::get('/user/searchServices', [UserController::class, 'searchServices'])->name('user.searchServices');
        Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

        Route::post('/user/updateUserPass/{id}', [UserController::class, 'updateUserPass'])->name('user.updateUserPass');
        Route::get('/user/edit/', [UserController::class, 'edit'])->name('user.edit');

//******************** User Message ********************
        Route::get('/user/message', [UserController::class, 'messages'])->name('user.messages');
        Route::get('/user/message/create', [UserController::class, 'messageStore'])->name('user.messageStore');
    });
});



