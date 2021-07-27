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
        Empresa::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'direccion' => $this->direccion,
        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Empresa::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->descripcion = $record->descripcion;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'descripcion' => 'required',
            'direccion' => 'required'
        ]);
        if ($this->selected_id) {
            $record = Empresa::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'direccion' => $this->direccion,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Empresa::where('id', $id);
            $record->delete();
        }
    }
}
