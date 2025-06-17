<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string|max:500',
        ]);

        Contacto::create($validated);

        return response()->json(['message' => 'Mensaje guardado con éxito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacto $contacto)
    {
        //
    }
}
