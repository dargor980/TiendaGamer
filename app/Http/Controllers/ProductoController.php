<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware('auth',['except' =>['index','destacado']]);
    }
    public function index()
    {
       return Producto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio_internet = $request->precio_internet;
        $producto->precio_tienda = $request->precio_tienda;
        $producto->descripcion = $request->descripcion;
        $producto->id_destacado = $request->id_destacado;
        $producto->url_imagen = $request->url_imagen;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();
        return $producto;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto= Producto::find($id);
        $producto->nombre= $request->nombre;
        $producto->precio_internet= $request->precio_internet;
        $producto->precio_tienda= $request->precio_tienda;
        $producto->descripcion= $request->descripcion;
        $producto->id_destacado= $request->id_destacado;
        $producto->url_imagen= $request->url_imagen;
        $producto->id_categoria= $request->id_categoria;

        $producto->save();
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto= Producto::find($id);
        $producto->delete();
    }

    public function destacado()
    {   
        return Producto::where('id_destacado',2)->get();
    }

    public function searchProducto(Request $request){
        if($request->descripcion=='todas')
        {
            return Producto::where('id_destacado','=',1)->get();
        }
        return Producto::where('id_categoria',$request->descripcion)->where('id_destacado','=',1)->get();
    }
    
    public function inventario()
    {
        return view('admin.inventario.maininventario');
    }

    public function addToDestacado(Request $request){
        $producto= Producto::find($request->id);
        $producto->id_destacado=2;
        $producto->save();

        return $producto;
    }

    public function removeToDestacado(Request $request){
        $producto= Producto::find($request->id);
        $producto->id_destacado=1;
        $producto->save();

        return $producto;
    }
    
}
