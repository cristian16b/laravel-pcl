<?php

use App\Http\Livewire\Empresa;
use App\Http\Livewire\Usuario;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario as ModelsUsuario;


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

// las siguientes son las rutas para los componentes livewire
Route::view('empresa', 'livewire.empresa.home');

Route::view('usuario', 'livewire.usuario.home');

Route::get('/imprimir/usuarios',function(){

    $data = [
        'titulo' => 'Listado de usuarios registrados',
        'data' => ModelsUsuario::all()
    ];
    $pdf = \PDF::loadView('listado-usuarios', $data);
    return $pdf->download('listado-usuarios.pdf');
});
