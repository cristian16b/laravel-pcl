<?php

namespace App\Http\Livewire;

use App\Models\Empresa as ModelsEmpresa;
use Livewire\Component;

class Empresa extends Component
{

    public $data, $nombre, $descripcion, $selected_id, $direccion;
    public $update = false;
    
    public function render()
    {
        $this->data = ModelsEmpresa::all();
        return view('livewire.empresa.empresa');
    }
   
    private function resetInput()
    {
        $this->nombre = null;
        $this->descripcion = null;
        $this->direccion = null;
    }
    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'descripcion' => 'required',
            'direccion' => 'required'
        ]);
        ModelsEmpresa::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'direccion' => $this->direccion,
        ]);
        $this->resetInput();
        session()->flash('message', 'Contacto agregado.');
    }
    public function edit($id)
    {
        $record = ModelsEmpresa::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->descripcion = $record->descripcion;
        $this->direccion = $record->direccion;
        $this->update = true;
    }
    public function update()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'descripcion' => 'required',
            'direccion' => 'required'
        ]);
        if ($this->selected_id) {
            $record = ModelsEmpresa::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'direccion' => $this->direccion,
            ]);
            $this->resetInput();
            $this->update = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = ModelsEmpresa::where('id', $id);
            $record->delete();
        }
    }
}
