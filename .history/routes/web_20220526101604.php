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
    return view('pages.dashboard');
});


Route::get('/buger', function () {
    return view('pages.<div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" name="name" id="name" aria-label="">
      </span>
      <input type="text" class="form-control" name="name" id="name" placeholder="" aria-label="">
    </div>');
});



