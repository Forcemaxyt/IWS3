<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado=Empleado::all();
        return view('empleados.index',compact('empleado'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado=new Empleado;
        $empleado->Nombre=$request->input('Nombre');
        $empleado->Apellido=$request->input('Apellido');
        $empleado->Cargo=$request->input('Cargo');
        $empleado->Departamento=$request->input('Departamento');
        $empleado->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ID)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ID)
    {
        $empleado=Empleado::find($ID);
        $empleado->Nombre=$request->input('Nombre');
        $empleado->Apellido=$request->input('Apellido');
        $empleado->Cargo=$request->input('Cargo');
        $empleado->Departamento=$request->input('Departamento');
        $empleado->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)
    {
        $empleado=Empleado::find($ID);
        $empleado->delete();
        return redirect()->back();
        //
    }
}
