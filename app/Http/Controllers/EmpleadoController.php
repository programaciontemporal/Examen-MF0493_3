<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento; // Importar Departamento
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::with('departamento')->get(); // Cargar relación
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all(); // Obtener departamentos
        return view('empleados.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email',
            'dni' => 'required|string|unique:empleados,dni',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $departamentos = Departamento::all(); // Obtener departamentos
        return view('empleados.edit', compact('empleado', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
            'dni' => 'required|string|unique:empleados,dni,' . $empleado->id,
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado eliminado exitosamente.');
    }
}
