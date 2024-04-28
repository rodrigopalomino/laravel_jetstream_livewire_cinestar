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
        Schema::create('cine', function (Blueprint $table) {
            $table->id();
            $table->char('RazonSocial',30);
            $table->integer('Salas');
            $table->foreignId('idDistrito')->constrained('distrito');
            $table->char('Direccion',100);
            $table->char('Telefonos',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cine');
    }
};
