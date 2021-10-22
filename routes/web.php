<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tesmail;

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

Route::get('/admin', function () {
    return view('admin/layout_master/layout_master');
});
Route::get('/', function () {
    return view('frontend/layouts/master');
});
Route::get('/send-mail', [Tesmail::class, 'Tesmail']);

