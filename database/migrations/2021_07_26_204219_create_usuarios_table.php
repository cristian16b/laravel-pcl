<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->string('clave');
            $table->string('grupo');
            $table->year('anio');
            // declaro la relacion usuario asignado a una empresa
            $table->integer('empresa_id')->unsigned();
            $table->index('empresa_id');
            // $table->foreign('empresa_id')->references('id')->on('empresa');

            // protected $fillable = ['nombre', 'apellido',
            // 'correo','clave','grupo','empresa','anio'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
