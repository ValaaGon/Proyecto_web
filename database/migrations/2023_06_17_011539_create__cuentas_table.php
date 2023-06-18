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
        Schema::create('Cuentas', function (Blueprint $table) {
            $table->string('user', 20)->primary()->unique();
            $table->string('password', 100);
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->integer('perfil_id');

            $table->foreign('perfil_id')->references('id')->on('Perfiles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cuentas');
    }
};
