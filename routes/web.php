<?php

use App\Http\Livewire\Empresa;
use App\Http\Livewire\Usuario;
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
    return view('app');
});

Route::get('empresa', Empresa::class);

Route::get('usuario', Usuario::class);
