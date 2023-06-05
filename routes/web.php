<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\LukisanController;
use App\Http\Controllers\TransaksiController;
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

//Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('landing');
// Route::get('/', function(){
//     return view('frontpage2.home', [
//         'title' => 'Home',
//         'active' => 'Home'
//     ]);
// });
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}', [HomeController::class, 'detailPackage'])->name('detail');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('package', PackagesController::class);
    Route::get('/pelelangan', [HomeController::class, 'pelelangan'])->name('pelelangan');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::get('/lukisan', 'LukisanController@index')->name('lukisan.index');
// Route::get('/lukisan/create', 'LukisanController@create')->name('lukisan.create');
// Route::post('/lukisan', 'LukisanController@store')->name('lukisan.store');
// Route::get('/lukisan/{lukisan}', 'LukisanController@show')->name('lukisan.show');

// Route::get('/lukisan', function(){
//     return view('lukisan.index');
// });

// Route::resource('/lukisan', LukisanController::class);

Route::get('/riwayat-pelelangan', function(){
    return view('frontpage.riwayat-pelelangan');
});
Route::get('/detail-lukisan', function(){
    return view('frontpage.detail-lukisan');
});

Route::resource('/dashboard/lukisans', LukisanController::class);
Route::resource('/dashboard/transaksis', TransaksiController::class);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});
