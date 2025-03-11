<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRelativesTable extends Migration
{
    public function up()
    {
        Schema::create('user_relatives', function (Blueprint $table) {
            $table->id();
            // Dos claves forÃ¡neas que apuntan a la tabla users
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('relative_id');

            // Tipo de relaciÃ³n (ej: father, mother, son, daughter, uncle, cousin, etc.)
            $table->string('relationship_type'); 

            $table->timestamps();

            // Definir llaves forÃ¡neas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('relative_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_relatives');
    }
}
