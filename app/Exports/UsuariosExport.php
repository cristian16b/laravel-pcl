<?php
namespace App\Exports;

use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsuariosExport implements FromView
{
    public function view(): View
    {
        return view('listado-usuarios', [
            'data' => Usuario::all(),
            'titulo' => 'Listado de usuarios'
        ]);
    }
}