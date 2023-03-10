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

// Route::get('/hello/{name}', function ($name) {
//     return view('hello', [
//         'name' => $name,
//     ]);
// });
Route::get('/soma/{n1}/{n2}', function ($n1,$n2) {
    return view('soma', [
        'n1' => $n1,
        'n2' => $n2,
    ]);
});
