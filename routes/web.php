<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'title'=> 'titolo1',
        'description'=> 'descrizione'
    ];
    return view('home', $data);
});
Route::get('/contatti', function () {
    return view('contact');
    
});
