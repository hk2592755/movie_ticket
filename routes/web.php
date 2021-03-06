<?php

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
});

// Route::get('/about','homeController@about')->name('about');
// Route::get('/contact','homeController@contact')->name('contact');
// Route::get('/movielist','homeController@movielist')->name('movielist');

// Route::get('/moviedetail','homeController@moviedetail')->name('moviedetail');
// Route::get('/moviecheckout','homeController@moviecheckout')->name('moviecheckout');

Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('redirects','MovieController@index')->name('admin');

Route::get('/add','MovieController@add')->name('/add');
Route::post('/create','MovieController@create')->name('/create');
Route::get('show','MovieController@show')->name('show');
Route::get('/delete/{id}','MovieController@delete')->name('delete');
///------Customer-------////

Route::get('/about','Customercontroller@about')->name('about');
 Route::get('/contact','Customercontroller@contact')->name('contact');
 Route::get('/movielist','Customercontroller@movielist')->name('movielist');
Route::get('/moviedetail/{id}','Customercontroller@moviedetail')->name('moviedetail');
Route::get('/ticketplan/{id}','Customercontroller@ticketplan')->name('ticketplan');
Route::get('/moviecheckout/{id}','Customercontroller@moviecheckout')->name('moviecheckout');
Route::get('/seatplan/{id}','Customercontroller@seatplan')->name('seatplan');
Route::post('/save/{id}','paymentController@save')->name('save');
Route::get('/payment','paymentController@index')->name('payment');
//Route::get('/ticketplan','Customercontroller@downloadPdf')->name('ticketplan');
