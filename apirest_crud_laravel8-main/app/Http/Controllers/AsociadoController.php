<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asociado;

class AsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asociados = Asociado::all();
        return $asociados;
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
        $asociado = new Asociado();
        $asociado->rif = $request->rif;
        $asociado->nombres = $request->nombres;
        $asociado->direccion = $request->direccion;
        $asociado->razon_social = $request->razon_social;
        $asociado->afiliacion = $request->afiliacion;
        $asociado->codigo_afiliacion = $request->codigo_afiliacion;
        $asociado->persona_de_contacto = $request->persona_de_contacto;
        $asociado->telefono_contacto = $request->telefono_contacto;
        $asociado->email = $request->email;
        $asociado->cbancaria_1 = $request->cbancaria_1;
        $asociado->cbancaria_2 = $request->cbancaria_2;


        $asociado->save();
        return "Resgitro Asociado Guardado";
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $asociado = Asociado::findOrFail($request->id);
        $asociado->rif = $request->rif;
        $asociado->nombres = $request->nombres;
        $asociado->direccion = $request->direccion;
        $asociado->razon_social = $request->razon_social;
        $asociado->afiliacion = $request->afiliacion;
        $asociado->codigo_afiliacion = $request->codigo_afiliacion;
        $asociado->persona_de_contacto = $request->persona_de_contacto;
        $asociado->telefono_contacto = $request->telefono_contacto;
        $asociado->email = $request->email;
        $asociado->cbancaria_1 = $request->cbancaria_1;
        $asociado->cbancaria_2 = $request->cbancaria_2;


        $asociado->save();

        return $asociado;
        return "Resgitro Asociado Modificado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $asociado = Asociado::destroy($request->id);
        //return $asociado;

        return "Resgitro Asociado Eliminado";
    }
}
