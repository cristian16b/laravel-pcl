<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario as ModelsUsuario;
use App\Http\Livewire\Empresa;
use App\Models\Empresa as ModelEmpresa;
// reference the Dompdf namespace
use Dompdf\Dompdf;

class Usuario extends Component
{
    public $data, $nombre, $apellido, $correo, $clave, $grupo, $empresa, $anio, $selected_id, $listaEmpresas;
    public $update = false;

    public function render()
    {
        $this->data = ModelsUsuario::all();
        $this->listaEmpresas = ModelEmpresa::all();
        // foreach ($this->data as $d) {
        //     // var_dump($flight);
        //     echo $d->empresa_id . '<br>';
        // }
        // die;
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


        // $empresa = ModelEmpresa::find($this->empresa)->first();
        
        $datos = [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'correo' => $this->correo,
            'clave' => $this->clave,
            'grupo' => $this->grupo,
            'empresa_id' => $this->empresa,
            'anio' => $this->anio,
        ];

        // dd($datos);
        ModelsUsuario::create($datos);
        $this->resetInput();
        session()->flash('message', 'Usuario agregado.');
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
        $this->empresa_id = $record->empresa_id;
        $this->anio = $record->anio;
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

    public function exportarPdf() {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function exportarXls() {

    }
}
