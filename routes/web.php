<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NickNameController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/mytestpage', [NickNameController::class, 'Index', 404]);

Route::get('/post-teacher', [NickNameController::class, 'PostIt', 404]);
Route::post('/post-teacher', [NickNameController::class, 'TeacherInsert', 404]);
