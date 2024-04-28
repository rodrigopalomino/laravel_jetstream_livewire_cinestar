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
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id();
            $table->char('Titulo',80);
            $table->char('FechaEstreno',80);
            $table->char('Director',50);
            $table->char('Generos',10);
            $table->integer('idClasificacion');
            $table->integer('idEstado');
            $table->char('Duracion',30);
            $table->char('Link',20)->nullable(true);
            $table->text('Reparto')->nullable(true);
            $table->text('Sinopsis')->nullable(true);
        });
    }
    
    // create table Pelicula (
    //     id int primary key auto_increment,
    //     Titulo char(80) not null,
    //     FechaEstreno char(10) not null,
    //     Director char(50) not null,
    //     Generos char(10) not null,
    //     idClasificacion int not null,
    //     idEstado int not null,
    //     Duracion char(3) not null,
    //     Link char(20),
    //     Reparto text(300),
    //     Sinopsis text(800) );  


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula');
    }
};
