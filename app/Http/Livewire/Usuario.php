<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario as ModelsUsuario;

class Usuario extends Component
{
    public $data, $nombre, $apellido, $correo, $clave, $grupo, $empresa, $anio, $selected_id;
    public $update = false;

    public function render()
    {
        $this->data = ModelsUsuario::all();
        return view('livewire.usuario.usuario');
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->apellido = null;
        $this->correo = null;
        $this->clave = null;
        $this->grupo = null;
        $this->empresa = null;
        $this->anio = null;
    }
    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required',
            'correo' => 'required|email:rfc,dns',
            'clave' => 'required|min:5',
            'grupo' => 'required',
            'empresa' => 'required',
            'anio' => 'required',
        ]);
        ModelsUsuario::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'correo' => $this->correo,
        ]);
        $this->resetInput();
        session()->flash('message', 'Contacto agregado.');
    }
    public function edit($id)
    {
        $record = ModelsUsuario::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->apellido = $record->apellido;
        $this->correo = $record->correo;
        $this->clave = $record->clave;
        $this->grupo = $record->grupo;
        $this->empresa = $record->empresa;
        $this->update = true;
    }
    public function update()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required',
            'correo' => 'required|email:rfc,dns',
            'clave' => 'required|min:5',
            'grupo' => 'required',
            'empresa' => 'required',
            'anio' => 'required',
        ]);
        if ($this->selected_id) {
            $record = ModelsUsuario::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'correo' => $this->correo,
                'clave' => $this->clave,
                'grupo' => $this->grupo,
                'empresa' => $this->empresa,
                'anio' => $this->anio,
            ]);
            $this->resetInput();
            $this->update = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = ModelsUsuario::where('id', $id);
            $record->delete();
        }
    }
}
