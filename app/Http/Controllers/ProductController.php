<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Product::all();

        $peticion= new PeticionController;
        $peticion->registrar();
        

         return  view( 'productos.index',  compact('producto') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peticion= new PeticionController;
        $peticion->registrar();
        return  view( 'productos.create');
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

        $peticion= new PeticionController;
        $peticion->registrar();

        Product::insert($datos);

          return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = request()->except('_token');
        $peticion= new PeticionController;
        $peticion->registrar();

        $producto= Product::findOrFail($id);

        return view('productos.editar',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method');
        
        $peticion= new PeticionController;
        $peticion->registrar();
        
        Product::where('id','=',$id)->update($datos);

       // $producto= Product::findOrFail($id);

        //return view('facturas.editar',compact('factura'));
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        $peticion= new PeticionController;
        $peticion->registrar();

        return redirect('productos');
    }


    public function calendario(){

        $peticion= new PeticionController;
        $peticion->registrar();

        

       $datos= new Product;

         $datos->id = rand(1,200);
         $datos->nombre_producto= date("Ymd");
         $datos->descripcion="TecActiva";
         $datos->precio=rand(1,500);
         $datos->estado=1;
         $datos->save();
         


       

       

    }

}
