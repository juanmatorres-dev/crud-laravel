<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados'] = Empleado::paginate(10);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token'); // Quita el token del formulario
        
        /**
         * Sube la imagen al directorio uploads
         */
        if($request->hasFile('Foto')){
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        
        Empleado::insert($datosEmpleado); // Inserta los datos en la BD

        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado = request()->except(['_token','_method']);
        
        /**
         * Sube la imagen al directorio uploads
         */
        if($request->hasFile('Foto')){
            $empleado = Empleado::findOrFail($id); // Recupera la información del empleado según el id
            Storage::delete('public/'.$empleado->Foto); // Borra la foto antigua

            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        
        
        Empleado::where('id','=',$id)->update($datosEmpleado);
        
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id); // Recupera la información del empleado según el id

        if (Storage::delete('public/'.$empleado->Foto)) {
            Empleado::destroy($id); // Borrar un empleado con un id
        }

        
        return redirect('empleado'); // Redirecciona a la vista principal
    }
}
