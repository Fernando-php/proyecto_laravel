<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

/*Route::get('/{cadena}', function ($cadena) {

    return view('welcome',[
        'cadena'=>$cadena
    ]);
});*/

Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('anaarenilla@hotmail.com')->send($correo);
    return "mensaje enviado";
});


/*Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');*/

