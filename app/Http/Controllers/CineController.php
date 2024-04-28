<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Distrito;
use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cines = Cine::all();

        return view('cine.index',compact('cines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $distritos = Distrito::all();
        return view('cine.create',compact('distritos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'RazonSocial'=>'required|string',
            'Salas'=>'required|integer',
            'idDistrito'=>'required|integer',
            'Direccion'=>'required|string',
            'Telefonos'=>'required|string', 
        ]);
        // dd($request->all());

        Cine::create($request->all());
        
        return redirect()->route('cine.index');
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
        $cine = Cine::findOrFail($id);
        $distritos = Distrito::all();
        return view('cine.edit',compact('cine','distritos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cine = Cine::findOrFail($id);

        $cine->update($request->all());

        return redirect()->route('cine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cine = Cine::findOrFail($id);
        $cine->delete();
        return redirect()->route('cine.index');
    }
}
