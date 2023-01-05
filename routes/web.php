<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;
use App\Models\group;


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

Route::get('/home', function () {
    $groups = group::all();
    return view('home', compact('groups'));
});


// Route::get('/create-group', function() {
//     return view ('registerr');
// });

Route::get('/create-group', [GroupController::class, 'create']);
Route::post('/store-group', [GroupController::class, 'store']);
Route::get('group', [GroupController::class, 'index']);
Route::delete('/delete-group/{id}', [GroupController::class, 'delete'])->name('delete');
Route::get('/register-leader', 'App\Http\Controllers\LeaderController@createLeader');
Route::post('/store-leader', 'App\Http\Controllers\LeaderController@storeLeader');
Route::get('/register-member', 'App\Http\Controllers\MemberController@createMember');
Route::post('/store-member', 'App\Http\Controllers\MemberController@storeMember');
