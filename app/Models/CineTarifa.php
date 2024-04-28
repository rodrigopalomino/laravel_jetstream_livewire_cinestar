<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CineTarifa extends Model
{
    use HasFactory;

    protected $table = 'cineTarifa';

    protected $fillable = [
        'idCine',
        'DiasSemana',
        'Precio',
    ];

    public  $timestamps  = false;
}
