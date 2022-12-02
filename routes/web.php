<?php

use App\Http\Controllers\Page;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\Employee;

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
#Route::get('test/show', [testController::class, 'show']);
Route::get('pages/show/{id}', [Page::class, 'showOne'])->where('id', '[0-9]+');;
Route::get('test/show/{param1}/{param2}', [TestController::class, 'show']);
Route::get('employee/{id}', [Employee::class, 'showField']);
Route::get('page/show/{a}', [Page::class,'showOne3']);



