<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloqueController extends Controller
{
    //
    public function index()
    {
        //
        return Bloque::all();

    }
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias|max:150',
            'descripcion' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $Bloque=Bloque::create($request->all());
        return $Bloque;
    }

    public function show($id)
    {
        //
        
        $Bloque= Bloque::findOrFail($id);
        return $Bloque;
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias|max:150',
            'descripcion' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
      
        $Bloque=Bloque::findOrFail($id)->update($request->all());
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bloque::destroy($id);
        return "Bloque $id eliminado.";
    }
}
