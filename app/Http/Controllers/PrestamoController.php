<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::paginate(10);
        return view('admin.prestamos.index', compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $categorias = Categoria::all();
        $ajuste = Ajuste::first();
        return view('admin.prestamos.create', compact('clientes', 'categorias', 'ajuste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return response()->json($request->all());
        $request->validate([
            'monto_prestado' => 'required|numeric|min:0.01',
            'cliente_id' => 'required|exists:clientes,id',
            'categoria_id' => 'required|exists:categorias,id',
            'tasa_interes' => 'required|numeric|min:0',
            'modalidad_pago' => 'required',
            'modalidad_amortizacion' => 'required',
            'nro_cuotas' => 'required|integer|min:1',
            'monto_interes_total' => 'required|numeric|min:0',
            'monto_total_a_pagar' => 'required|numeric|min:0',
            'fecha_inicio' => 'required|date',
        ]);

        $prestamo = new Prestamo();
        $prestamo->monto_prestado = $request->monto_prestado;
        $prestamo->cliente_id = $request->cliente_id;
        $prestamo->categoria_id = $request->categoria_id;
        $prestamo->tasa_interes = $request->tasa_interes;
        $prestamo->modalidad_pago = $request->modalidad_pago;
        $prestamo->modalidad_amortizacion = $request->modalidad_amortizacion;
        $prestamo->nro_cuotas = $request->nro_cuotas;
        $prestamo->monto_interes_total = $request->monto_interes_total;
        $prestamo->monto_total_a_pagar = $request->monto_total_a_pagar;
        $prestamo->fecha_inicio = $request->fecha_inicio;
        $prestamo->estado = 'Pendiente';
        $prestamo->save();

        return redirect()->route('admin.prestamos.index')
            ->with('mensaje', 'Préstamo creado exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
