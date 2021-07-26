<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $fillable = ['nombre', 'apellido',
    'correo','clave','grupo','empresa','anio'];
    protected $hidden = ['clave'];
    protected $primaryKey = 'usuario_id';

    public function getEmpresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
