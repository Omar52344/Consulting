<?php

namespace App\Http\Controllers;

use App\Models\Facturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Facturas::all();

         return  view( 'facturas.index',  compact('facturas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view( 'facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');

         

        Facturas::insert($datos);

          return redirect('facturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function enviarbuscar(Request $request)
    {
        $tipo = $request->input('tipo');
        //echo $tipo;
        $entrada = $request->input('entrada');
        //echo $entrada;

        if($tipo=='id'){

            $factura= DB::table('factura')->where('id', $entrada)->get();
           // echo $factura;
        }
        if($tipo=='valortotal'){
            $factura= DB::table('factura')->where('valor_total', $entrada)->get();

            
        }
        if($tipo=='ivatotal'){
            $factura=  DB::table('factura')->where('iva_total', $entrada)->get();

            
        }
        if($tipo=='itemscompra'){

            $factura= DB::table('factura')->where('items_compra', $entrada)->get();

        }
        if($tipo=='valorescompra'){
            $factura=DB::table('factura')->where('valores_compra', $entrada)->get();

            
        }if($tipo=='ivaindividual'){
            $factura=DB::table('factura')->where('iva_individual', $entrada)->get();


            
        }if($tipo=='pagada'){

            $factura= DB::table('factura')->where('pagada', $entrada)->get();
            
        }
        

          

        return  view( 'facturas.resultados',  compact('factura') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = request()->except('_token');

        $factura= Facturas::findOrFail($id);

        return view('facturas.editar',compact('factura'));
        
    }


    public function buscar()
    {
       
        
        return view('facturas.buscar');
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method');
        
        Facturas::where('id','=',$id)->update($datos);

        $factura= Facturas::findOrFail($id);

        //return view('facturas.editar',compact('factura'));
        return redirect('facturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facturas::destroy($id);

        return redirect('facturas');
    }
}
