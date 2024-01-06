<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetalleVenta::all();
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
        // $table->unsignedBigInteger('venta_id');
        // $table->unsignedBigInteger('producto_id');
        // $table->integer('cantidad');
        // $table->decimal('precio_unitario', 10, 2);
        $detalleVenta = new DetalleVenta();
        $detalleVenta->venta_id = $request->venta_id;
        $detalleVenta->producto_id = $request->producto_id;
        $detalleVenta->cantidad = $request->cantidad;
        $detalleVenta->precio_unitario = $request->precio_unitario;
        $detalleVenta->save();
        return "detalle de venta registrada exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetalleVenta $detalleVenta)
    {
        //
    }
}
