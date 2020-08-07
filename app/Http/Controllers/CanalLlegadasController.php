<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CanalLlegadas;

class CanalLlegadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canalLLegadas = CanalLlegadas::all();
        return $canalLLegadas;
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
        $canalLlegada = new CanalLlegadas();
        $canalLlegada->nombre = $request->nombre;
        $canalLlegada->descripcion = $request->descripcion;
        $canalLlegada->save();

        return response()->json(['message' => 'Generado Satisfactorimente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $canalLlegada = CanalLlegadas::findOrFail($id);
        return $canalLlegada;
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
    public function update(Request $request, $id)
    {
        $canalLlegada = CanalLlegadas::findOrFail($id);
        $canalLlegada->nombre = $request->input('nombre');
        $canalLlegada->descripcion = $request->input('descripcion');
        $canalLlegada->update();

        return response()->json(['message' => 'Modificado Satisfactorimente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canalLlegada = CanalLlegadas::findOrFail($id);
        $canalLlegada->delete();

        return response()->json(['message' => 'Eliminado Satisfactorimente']);
    }
}
