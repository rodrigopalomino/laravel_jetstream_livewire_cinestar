<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinePelicula extends Model
{
    use HasFactory;

    protected $table = 'cinePelicula';

    protected $fillable = [
        'idCine',
        'idPelicula',
        'Sala',
        'Horarios',
    ];

    public  $timestamps  = false;
}
