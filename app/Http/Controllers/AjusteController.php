<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjusteController extends Controller
{
    public function index()
    {
        return view('admin.ajustes.index');
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());

        //validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
    }
}
