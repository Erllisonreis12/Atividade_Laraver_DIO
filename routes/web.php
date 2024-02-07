<?php

use App\Http\Controllers\Usuario;
use Illuminate\Auth\Events\Login;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{id?}', [Usuario::class, 'login'])->name('login');
Route::post('/entrar', [Usuario::class, 'entrar'])->name('entrar');

Route::get('/user/cadastrar', [Usuario::class, 'cadastrar'])->name('cadastrar');
Route::post('/salvar', [Usuario::class, 'salvar'])->name('salvar');


Route::get('/teste/teste', function (){
    return view('layout.basehome');
});

