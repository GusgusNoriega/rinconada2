<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la moneda (Ej: DÃ³lar estadounidense)
            $table->string('code', 3)->unique(); // CÃ³digo ISO 4217 (Ej: USD, EUR)
            $table->string('symbol', 10); // SÃ­mbolo de la moneda (Ej: $, â‚¬)
            $table->decimal('exchange_rate', 10, 4)->default(1.0000); // Tasa de cambio con respecto a la moneda base
            $table->boolean('is_active')->default(true); // Para activar o desactivar la moneda
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
