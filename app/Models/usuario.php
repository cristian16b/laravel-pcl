<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido',
    'correo','clave','grupo','empresa_id','anio'];
    protected $hidden = ['clave'];
    protected $primaryKey = 'id';

    public function getEmpresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
