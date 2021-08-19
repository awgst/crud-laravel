<?php
use App\Http\Controllers\PageController;

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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
// Route::get('student/', 'StudentController@index');
// Route::get('student/create', 'StudentController@create');
// Route::post('student', 'StudentController@store');
// Route::get('student/{student}/edit', 'StudentController@edit');
// Route::put('student/{student}', 'StudentController@update');
// Route::delete('student/{student}', 'StudentController@destroy');
Route::resource('student', StudentController::class);