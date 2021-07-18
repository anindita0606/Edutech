<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\addParentsController;
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
// Route::get('/add', function () {
//     return view('addParent');
// });


Route::get('/login', [LoginController::class,'adminLogin']);
Route::post('/login_post', [LoginController::class,'adminLoginPost'])->name('admin_login');
Route::get('/addParent', [addParentsController::class,'addParent'])->name('addParent');
Route::post('/addParent_post', [addParentsController::class,'post'])->name('addParent');

