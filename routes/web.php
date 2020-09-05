<?php

use App\Formation;
use App\Work;
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

//    Get 3top Rating from my Works
    $topWorks = Work::orderBy('rating', 'DESC')->take(3)->get();
$formationHome = Formation::take(3)->get();
    return view('welcome', compact('topWorks','formationHome'));

})->name('index');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


//   ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::resource('/admin', 'HomeController')->names([
    'fIndex' => 'formationD.index',
    'fEdit' => 'formationD.edit',
    'fUpdate' => 'formationD.update',
    'fDestroy' => 'formationD.destroy'
]);
//
//Route::group(['prefix' => 'admin'], function () {
//    if (auth()->check()) {
////        /Formation
//        Route::post('/', 'FormationsController@store');
//        Route::get('/', 'FormationsController@update');
//        Route::get('/', 'FormationsController@destroy');
////        /Work
//        Route::post('/', 'WorksController@store');
//        Route::get('/', 'WorksController@update');
//        Route::get('/', 'WorksController@destroy');
////        /Experience
//        Route::post('/', 'ExperiencesController@store');
//        Route::get('/', 'ExperiencesController@update');
//        Route::get('/', 'ExperiencesController@destroy');
//
//
//    } else {
//
//        return redirect()->to('login');
//    }
//});


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

Route::post('formations/{id}/edit',[
   'uses'=>'FormationsController@update',
   'as' => 'formation.update'

]);
// / Work

Route::get('/works', function () {
    return view('work.works');
})->name('works');

Route::resource('/works', 'WorksController')->names([
    'index' => 'work.index',
    'create' => 'work.create',
    'update' => 'work.update',
    'edit' => 'work.edit',
    'destroy' => 'work.destroy'
]);

