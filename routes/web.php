<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NniPartnerController;


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
Route::get('/networkgraph', function () {
    return view('networkgraph');
});
Route::get('/network', function () {
    return view('network');
});

Route::resource('nni-partners', NniPartnerController::class);