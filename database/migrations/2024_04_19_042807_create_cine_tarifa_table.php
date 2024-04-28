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
        Schema::create('cineTarifa', function (Blueprint $table) {
            $table->foreignId('idCine')->constrained('Cine');
            $table->char('DiasSemana',80);
            $table->decimal('Precio',5,2);
        });
    }

    // create table CineTarifa (
    //     idCine int references Cine(id),
    //     DiasSemana char(80) not null,
    //     Precio decimal(5,2) not null );
      

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cineTarifa');
    }
};
