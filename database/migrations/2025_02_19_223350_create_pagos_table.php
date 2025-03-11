<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            
            // RelaciÃ³n muchos-a-uno: cada "pago" pertenece a un usuario
            // user_id (FK) -> users.id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Ã³, manualmente:
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('concepto');
            $table->date('fecha');
            $table->date('vence')->nullable();
            $table->string('documento')->nullable();
            // RelaciÃ³n muchos-a-uno: cada "pago" tiene una moneda
            $table->foreignId('currency_id')->constrained('currencies')->onDelete('cascade');
            $table->decimal('importe', 8, 2)->default(0);
            $table->string('estado')->default('Pendiente');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
