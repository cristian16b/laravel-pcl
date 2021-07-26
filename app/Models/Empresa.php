<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa';
    protected $fillable = ['nombre', 'descripcion', 'direccion'];
    protected $hidden = [];

    protected $primaryKey = 'empresa_id';
}
