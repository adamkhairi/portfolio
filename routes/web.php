<?php

use Illuminate\Support\Facades\Auth;
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
})->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// / Certificate / Formation
Route::get('/formations', function () {
    return view('formation.formations');
})->name('formation');


Route::resource('/formations', 'FormationsController')->names([
    'index' => 'formation.index',
    'create' => 'formation.create',
    'update' => 'formation.update',
    'edit' => 'formation.edit',
    'destroy' => 'formation.destroy'
]);

// / Work
Route::get('/works',function (){
    return view('work.works');
})->name('work');

Route::resource('/works', 'WorksController')->names([
    'index' => 'work.index',
    'create' => 'work.create',
    'update' => 'work.update',
    'edit' => 'work.edit',
    'destroy' => 'work.destroy'
]);
