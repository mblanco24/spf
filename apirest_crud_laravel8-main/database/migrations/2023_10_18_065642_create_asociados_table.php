<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociados', function (Blueprint $table) {
            $table->id();
            $table->integer('rif');
            $table->string('nombres');
            $table->string('direccion');
            $table->string('razon_social');
            $table->integer('afiliacion');
            $table->string('codigo_afiliacion');
            $table->string('persona_de_contacto');
            $table->integer('telefono_contacto');
            $table->string('email');
            $table->integer('cbancaria_1');
            $table->integer('cbancaria_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asociados');
    }
}
