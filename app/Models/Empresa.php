<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = ['nombre', 'descripcion', 'direccion'];
    protected $hidden = [];

    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
