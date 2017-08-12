<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tecnico;
use Laracasts\Flash\Flash;
use App\Http\Requests\TecnicoRequest;

class TecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = Tecnico::orderBy('id', 'ASC')->paginate(5);
        return view('admin.tecnicos.index')->with('tecnicos', $tecnicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnico = new Tecnico($request->all());
        $tecnico->save();

        //Flash::success("se ha registrado el tecnico " . $tecnico->name . " exitosamente!");

        return redirect()->route('tecnicos.index');
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
        $tecnico = Tecnico::find($id);
        return view('admin.tecnicos.edit')->with('tecnico', $tecnico);
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
        $tecnico = Tecnico::find($id);
        $tecnico->name = $request->name;
        $tecnico->tel = $request->tel;
        $tecnico->wp = $request->wp;
        $tecnico->email = $request->email;
        $tecnico->save();


        Flash::warning('El tecnico ' . $tecnico->name . ' fue editado');
        return redirect()->route('tecnicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tecnico = Tecnico::find($id);
        $tecnico->delete();

       
        Flash::error("se ha eliminado ". $tecnico->name . " de froma exitosa!" );
        return redirect()->route('tecnicos.index');
    }
}
