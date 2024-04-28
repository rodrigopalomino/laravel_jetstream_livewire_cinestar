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
        Schema::create('cinePelicula', function (Blueprint $table) {
            $table->foreignId('idCine')->constrained('cine');
            $table->foreignId('idPelicula')->constrained('pelicula');
            $table->integer('Sala')->nullable(false);
            $table->char('Horarios', 150)->nullable(false);
        });
    }

    // create table CinePelicula (
    //     idCine int references Cine(id),
    //     idPelicula int references Pelicula(id),
    //     Sala int not null,
    //     Horarios char(150) not null );

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinePelicula');
    }
};
