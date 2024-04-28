<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    use HasFactory;

    protected $table = 'cine';

    protected $fillable = [
        'RazonSocial',
        'Salas',
        'idDistrito',
        'Direccion',
        'Telefonos',
        'img'
    ];

    public  $timestamps  = false;

    public function getIdDistritoAttribute($value)
    {
        $distrito = Distrito::findOrFail($value);
        return $distrito["Detalle"];
    }
}
