<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto')->nullable(); // Agregamos el campo 'foto'
            // AquÃ­ agregas la nueva columna
            $table->boolean('estado')->default(false);
            $table->string('tipo_doc')->nullable();
            $table->string('nro_doc')->unique();
            $table->string('codcli')->nullable();
            $table->string('codpar')->nullable();
            $table->string('codfam')->nullable();
            $table->string('CodSoc')->nullable();
            $table->boolean('force_password_change')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

