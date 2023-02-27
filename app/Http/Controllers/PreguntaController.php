<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PreguntaController extends Controller
{
    //

    public function index()
    {
        //
        $preguntas=Pregunta::paginate();
        return View('preguntas',compact('preguntas'));

    }

    public function showByCategory(Request $request)
    {
        //
        $categoria_id = $request->input('categoria_id');
        $preguntas = Pregunta::where('categoria_id',$categoria_id)
                ->inRandomOrder()
                ->limit(20)
                ->get();

        return View('preguntas',compact('preguntas'));

    }

    public function showByBloque(Request $request)
    {
        //
        $bloque_id = $request->input('bloque_id');
        $preguntas = Pregunta::whereHas('categoria.bloque', function($query) use ($bloque_id) {
            $query->where('id', $bloque_id);
        })->inRandomOrder()
        ->limit(20)->get();

        return View('preguntas',compact('preguntas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'pregunta' => 'required|max:255',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'repuesta'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $Pregunta=Pregunta::create($request->all());
        return $Pregunta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Pregunta::findOrFail($id);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'pregunta' => 'required|unique:ivas|max:150',
            'descripcion' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'respuesta'=>'requiered'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $Pregunta=Pregunta::findOrFail($id)->update($request->all());
        return $request->all();
    }
    /*
        
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pregunta::destroy($id);
        return "Pregunta $id eliminada.";
    }
    
}