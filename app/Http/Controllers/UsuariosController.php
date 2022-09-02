<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiposuser as Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $usuarios = Usuarios::all();
        return view('/usuarios/index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/usuarios/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->descripcion = $request->get('descripcion');
        // $usuarios->empresa_id = Auth::user()->empresa_id;
        $usuarios->save();

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource. ( Muestra el recurso especificado.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. ( Muestra el formulario para editar el recurso especificado.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $usuario = Usuarios::find($id);
         return view('/usuarios/edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage. (Actualice el recurso especificado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->descripcion = $request->get('descripcion');
        $usuario->save();

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();

        return redirect('usuarios');
    }
}
