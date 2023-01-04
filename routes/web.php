<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\TravailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Auth::routes();
// Route::get('/login',[WebsiteController::class,'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::middleware('auth')->group(function(){
    Route::get('/travail',[TravailController::class,'travail']);
    Route::post('/insert-travail',[TravailController::class,'insertTravail']);
    Route::get('/posts',[TravailController::class,'posts']);

    Route::get('/sender',[TravailController::class,'sender']);
    Route::get('/search-post',[TravailController::class,'search']);



 });
