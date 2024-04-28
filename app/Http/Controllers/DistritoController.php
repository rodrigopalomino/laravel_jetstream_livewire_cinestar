<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Distrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distritos = Distrito::all();
        return view('distrito.index',compact('distritos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distrito.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'detalle'=> 'required|string|min:3'
        ]);

        Distrito::create($request->all());

        return redirect()->route('distrito.index');
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
        $distrito = Distrito::findOrFail($id);
        return view('distrito.edit', compact('distrito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'detalle'=> 'required|string|min:3'
        ]);

        $distrito = Distrito::findOrFail($id);
        Log::info('ID del distrito actualizado: ' . $distrito->id);

        $distrito->update($request->all());

        return redirect()->route('distrito.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $distrito = Distrito::findOrFail($id);
        $distrito->delete();
        return redirect()->route('distrito.index');
    }
}
