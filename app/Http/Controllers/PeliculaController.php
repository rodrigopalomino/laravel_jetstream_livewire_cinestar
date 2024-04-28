<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();

        return view('pelicula.index',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $generos = Genero::all();
        return view('pelicula.create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titulo'=>'required|string',
            'FechaEstreno'=>'required|string',
            'Director'=>'required|string',
            'Generos'=>'array',
            'idClasificacion'=>'required|integer',
            'idEstado'=>'required|integer',
            'Duracion'=>'required|string',
            'Link'=>'required|string',
            'Reparto'=>'nullable|string',
            'Sinopsis'=>'nullable|string',
        ]);
        $request->merge(['Generos' => implode(',', $request->input('Generos'))]);
        // dd($request->all());
        Pelicula::create($request->all());
        

        return redirect()->route('pelicula.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->Generos = explode(',', $pelicula->Generos);
        $generos = Genero::all();
        return view('pelicula.edit',compact('pelicula','generos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Titulo'=>'required|string',
            'FechaEstreno'=>'required|string',
            'Director'=>'required|string',
            'Generos'=>'array',
            'idClasificacion'=>'required|integer',
            'idEstado'=>'required|integer',
            'Duracion'=>'required|string',
            'Link'=>'required|string',
            'Reparto'=>'nullable|string',
            'Sinopsis'=>'nullable|string',
        ]);
        $request->merge(['Generos' => implode(',', $request->input('Generos'))]);
        $pelicula = Pelicula::findOrFail($id);
        $pelicula -> update($request->all());
        
        return redirect()->route('pelicula.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('pelicula.index');
    }
}
