<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// ADMIN ROUTE
ROUTE::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//USER MANAMENT ALL ROUTE


Route::prefix('user')->group(function(){
    ROUTE::get('/view', [UserController::class, 'UserView'])->name('user.view');
    ROUTE::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    ROUTE::post('/storage', [UserController::class, 'UserStorage'])->name('user.storage');
    ROUTE::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    ROUTE::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
    ROUTE::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');
});

// USER PROFILE & PASSWORD
Route::prefix('profile')->group(function(){
    ROUTE::get('/view', [ProfileController::class, 'ViewProfile'])->name('profile.view');
    ROUTE::get('/edit', [ProfileController::class, 'EditProfile'])->name('profile.edit');
    ROUTE::post('/storage', [ProfileController::class, 'StorageProfile'])->name('profile.storage');
    ROUTE::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    ROUTE::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});