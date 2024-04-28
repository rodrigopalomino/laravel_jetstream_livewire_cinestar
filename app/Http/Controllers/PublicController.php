<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function peliculas(string $id)
    {
        if($id==="cartelera"){
            $id = 1;
        }if($id==="estrenos"){
            $id = 2;
        }


        $peliculas = Pelicula::where('idEstado', $id)->get();
        return view('public.peliculas', compact('peliculas'));
    }

    public function pelicula(string $id)
    {
        $pelicula = Pelicula::where('id', $id)->get();
        $pelicula = $pelicula[0];
        return view('public.pelicula',compact('pelicula'));
    }

    public function cines()
    {
        $cines = Cine::all();
        return view('public.cines',compact('cines'));
    }

    public function cine(string $id)
    {
        $cine = Cine::where('id', $id)->get();
        $cine = $cine[0];
        return view('public.cine',compact('cine'));
    }
}
