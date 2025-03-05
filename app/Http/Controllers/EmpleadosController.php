<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Oficina;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        $oficinas = Oficina::all();
        return view('empleadosOficina', compact('empleados', 'oficinas'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $oficina = Oficina::findOrFail($id);
        return view('crearEmpleado', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request -> validate([
            'nombre' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'rol' => 'required',
            'fechaNacimiento' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'id_oficina' => $id
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index', $id)->with('success', 'Empleado creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $oficina = Oficina::findOrFail($empleado->oficina_id);
        return view('editarEmpleado', compact('empleado', 'oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $oficina = Oficina::findOrFail($empleado->oficina_id);
        return view('editarEmpleado', compact('empleado', 'oficina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
