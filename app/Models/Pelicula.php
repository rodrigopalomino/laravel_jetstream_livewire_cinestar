<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'pelicula';

    protected $fillable = [
        'Titulo',
        'FechaEstreno',
        'Director',
        'Generos',
        'idClasificacion',
        'idEstado',
        'Duracion',
        'Link',
        'Reparto',
        'Sinopsis',
        'img',
    ];

    public  $timestamps  = false;

    


    public function getGenerosAttribute($value){

        $value = array_map('intval', explode(',', $value));
        $generos = Genero::all();
        $geneross = "";
        
        foreach($value as $element){
            
            foreach ($generos as $genero) {
                if ($genero["id"] === $element) {
                    $geneross .= $genero["Detalle"] . ",";
                    break; // No es necesario seguir buscando una vez encontrado el género
                }
            }
        }
    
        $geneross = rtrim($geneross, ',');
    
        return $geneross;    
    }

    public function getIdEstadoAttribute($value){

        if($value===1){
            $value = "cartelera";
        }
        if($value==2){
            $value = "estreno";
        }
        
        return $value;
        
    }

    
}
