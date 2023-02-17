<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/{categoria?}', HomeController::class)->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('dashboard/{categoria?}', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('anaarenilla@hotmail.com')->send($correo);
    return "mensaje enviado";
});

//metodo index,para el listado de los mensajes
Route::get('mensajes', [MessagesController::class, 'index'])->name('mensajes.index');

// metodo create,para crear mensaje
Route::post('mensajes/create', [MessagesController::class, 'create'])->name('mensajes.create');

//Para enviar informacion del formulario
Route::post('mensajes',[MessagesController::class, 'store'])->name('mensajes.store');

//metodo show, para mostrar datos en el formulario
Route::get('mensajes/{mensaje}', [MessagesController::class, 'show'])->name('mensajes.show');

//para  mostrar formulario de actualizacion
Route::get('mensajes/{mensaje}/edit',[MessagesController::class, 'edit'])->name('mensajes.edit');

//para actualizar
Route::put('mensajes/{mensaje}',[MessagesController::class, 'update'])->name('mensajes.update');

Route::delete('mensajes/{mensaje}',[MessagesController::class,'destroy'])->name('mensajes.destroy');


