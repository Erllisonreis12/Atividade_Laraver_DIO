<?php

use App\Http\Controllers\Usuario;
use App\Models\Cidadao;
use Illuminate\Http\Request;
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

Route::get('/', [Usuario::class, 'login'])->name('login');
Route::post('/entrar', [Usuario::class, 'entrar'])->name('entrar');
Route::get('/user/cadastrar', [Usuario::class, 'cadastrar'])->name('cadastrar');
Route::post('/salvar', [Usuario::class, 'salvar'])->name('salvar');

Route::get('/cidadao/home', [Cidadao::class, 'home_cidadao'])->name('home_cidadao');
Route::get('/cidadao/meusdados', [Cidadao::class, 'meusDados'])->name('home_dados');




