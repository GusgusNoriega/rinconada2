<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // RelaciÃ³n uno a uno
            $table->string('nro_doc')->nullable();
            $table->string('codigo')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellido_pa')->nullable();
            $table->string('apellido_ma')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('lugar_nac')->nullable();
            $table->string('edo_civil')->nullable();
            $table->string('sexo')->nullable();
            $table->date('fech_nac')->nullable();
            $table->integer('edad')->nullable();
            $table->date('fech_ingreso')->nullable();
            $table->string('nro_solicitud')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('tel_fijo')->nullable();
            $table->string('tel_cel')->nullable();
            $table->string('email')->nullable();
            $table->string('centro_estudio')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('profesion')->nullable();
            $table->string('telefono_empresa')->nullable();
            $table->string('centro_laboral')->nullable();
            $table->string('fax_empresa')->nullable();
            $table->string('cargo_laboral')->nullable();
            $table->string('dir_empresa')->nullable();
            $table->timestamps();

            // Clave forÃ¡nea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
