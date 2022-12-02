<?php
use Illuminate\Support\Facades\Route;
Route::get('/test/', function()
{
	return '!';
});
Route::get('/dir/test/', function()
{
	return '!!';
});
Route::get('/user/{id}/', function ($id)
{return 'user'.$id;});
Route::get('/nameuser/{name}/', function ($name)
{return 'Name User'.$name;});
Route::get('/sum/{num1}/{num2}', function ($num1,$num2)
{return $num1+=$num2;});
Route::get('/user/show-/{id}/', function ($id)
{
	return $id;
});
Route::get('/user1;/{id?}/',function ($id = 0)
{
	return $id;
});
Route::get('test/show', [App\Http\Controllers\TestController::class, 'show']);
?>