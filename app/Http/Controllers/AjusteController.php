<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use Illuminate\Http\Request;

class AjusteController extends Controller
{
    public function index()
    {
        $jsonData = file_get_contents('https://api.hilariweb.com/divisas');
        $divisas = json_decode($jsonData, true);
        // return response()->json($divisas);
        return view('admin.ajustes.index', compact('divisas'));
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());

        //validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'divisa' => 'required|string|max:10',
            'logo' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
            'interes' => 'nullable|numeric|min:0|max:100',
            'mora' => 'nullable|numeric|min:0|max:100',
        ]);

        //guardar los datos
        $ajuste = new Ajuste();
        $ajuste->nombre = $request->nombre;
        $ajuste->descripcion = $request->descripcion;
        $ajuste->direccion = $request->direccion;
        $ajuste->telefono = $request->telefono;
        $ajuste->email = $request->email;
        $ajuste->divisa = $request->divisa;
        $ajuste->logo = $request->logo;
        $ajuste->web = $request->web;
        $ajuste->interes = $request->interes ?? 10;
        $ajuste->mora = $request->mora ?? 2;
        $ajuste->save();

        return redirect()->route('admin.ajustes.index')
            ->with('success', 'Ajustes guardados correctamente.');
    }
}
