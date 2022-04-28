<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminIndex;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LowonganController;
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



Route::get('/', function () {
    return view('index');
})->name('detil');

Route::get('/form_low', [LowonganController::class,'create']
)->name('landingpage');
Route::POST('/store', [LowonganController::class,'store']);

Route::get('/carlow', function () {
    return view('job_listing');
})->name('dd');

Route::get('/job_details', function () {
    return view('job_details');
})->name('detil');

Route::get('/about', function () {
    return view('about');
})->name('abot  ');

Route::get('/dashboard', function () {
    return redirect()->route('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'verified', 'can:admin access'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminIndex::class)->name('index');

    // roles & permissions
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('/roles', RoleController::class)->except(['show']);

    // users
    Route::resource('/users', UserController::class);

    // blogs
    Route::resource('/blogs', BlogController::class);

    // lwoongan
    Route::resource('/lowongan', LowonganController::class);

    // bulk delete
    Route::delete('/bulk-delete/permissions', [PermissionController::class, 'massDelete'])->name('permissions.bulkDelete');
    Route::delete('/bulk-delete/roles', [RoleController::class, 'massDelete'])->name('roles.bulkDelete');
    Route::delete('/bulk-delete/users', [UserController::class, 'massDelete'])->name('users.bulkDelete');
    Route::delete('/bulk-delete/blogs', [BlogController::class, 'massDelete'])->name('blogs.bulkDelete');
});

Route::middleware(['verified'])->group(function() {
    Route::get('account/verify-new-email/{token}', [AccountController::class, 'verifyNewEmail'])->name('account.verifyNewEmail');
    Route::resource('account', AccountController::class)->only(['index', 'edit', 'update']);
});

require __DIR__ . '/auth.php';
