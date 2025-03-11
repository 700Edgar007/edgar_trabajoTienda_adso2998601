<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = producto::all();
        return response()->json(['listaProducto' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productoNUEVO =new producto();
        $productoNUEVO->codigo =$request->codigo;
        $productoNUEVO->nombre =$request->nombre;
        $productoNUEVO->cantidad =$request->cantidad;
        $productoNUEVO->unidad=$request->unidad;
        $productoNUEVO->save();
        return response()->json(['productoNUEVO' =>$productoNUEVO]);
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        return response()->json(['productos' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        
        $producto->codigo =$request->codigo;
        $producto->nombre =$request->nombre;
        $producto->cantidad =$request->cantidad;
        $producto->unidad=$request->unidad;
        $producto->save();
        
        return response()->json(['productoUPDATE' =>$producto]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
        return response()->json(['productoDESTROY' =>$producto]);
    }
}
