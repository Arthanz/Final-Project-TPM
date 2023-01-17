<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/create-group', [GroupController::class, 'create']);
Route::post('/store-group', [GroupController::class, 'store']);
Route::get('group', [GroupController::class, 'index']);
Route::delete('/delete-group/{id}', [GroupController::class, 'delete'])->name('delete');
Route::get('/register-leader', 'App\Http\Controllers\LeaderController@createLeader');
Route::post('/store-leader', 'App\Http\Controllers\LeaderController@storeLeader');
Route::get('/register-member', 'App\Http\Controllers\MemberController@createMember');
Route::post('/store-member', 'App\Http\Controllers\MemberController@storeMember');
Route::get('/dashboardGroup', 'App\Http\Controllers\DashboardController@index');
Route::get('/paymentInput', 'App\Http\Controllers\PaymentController@create');
Route::post('/storePayment', 'App\Http\Controllers\PaymentController@store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
