<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movement;
use Illuminate\Http\Request;

class Movimiento extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::all();;
        return response()->json(['listaProducto' => $movements], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movimientoNUEVO =new Movement();

        $movimientoNUEVO->type =$request->type;
        $movimientoNUEVO->cantidad =$request->cantidad;
        $movimientoNUEVO->punto_venta =$request->punto_venta;
        $movimientoNUEVO->sala_venta=$request->sala_venta;
        $movimientoNUEVO->producto_id = $request->producto_id;
        $movimientoNUEVO->save();
        return response()->json(['MovimientoNUEVO' =>$movimientoNUEVO]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(movimiento $Movement)
    {
        

        return response()->json(['movimiento' => $Movement]);
        
    }
    //basicamente ayuda a mostrar un producto en especifico colocando el id del producto en la url

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movement $movimientoUP)
    {
        $movimientoUP->type =$request->type;
        $movimientoUP->cantidad =$request->cantidad;
        $movimientoUP->punto_venta =$request->punto_venta;
        $movimientoUP->sala_venta=$request->sala_venta;
        $movimientoUP->save();
        return response()->json(['MovimientoNUEVO' =>$movimientoUP]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movement $MOvimiDESTROY)
    {
        $MOvimiDESTROY->delete();
        return response()->json(['productoDESTROY' =>$MOvimiDESTROY]);
    }
}
