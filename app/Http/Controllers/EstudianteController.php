<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        //Muestra a los estudiantes

        $estudiantes = Estudiante::all();
        return view('Estudiantes.index', compact('estudiantes'));
    }

    public function getCrear() {
        //Muestra formulario de creación de estudiante

        return view('Estudiantes.crear');
    }

    public function postCrear(Request $request) {
        // Almacena estudiante en DB

        $student = new estudiante();

        $student->estudiante_nombre = $request->estudiante_nombre;
        $student->estudiante_apellido = $request->estudiante_apellido;
        $student->estudiante_edad = $request->estudiante_edad;
        $student->estudiante_correo = $request->estudiante_correo;
        $student->estudiante_telefono = $request->estudiante_telefono;
        $student->save();

        return redirect()->route('estudiantes.index');      
    }

    public function edit($estudiante_id) {
        // Editando estudiante

        $student = Estudiante::find($estudiante_id);

        return view('Estudiantes.editar', compact('student'));
    }

    public function update(Request $request, $estudiante_id) {
        // Actualizando estudiante

        $student = Estudiante::find($estudiante_id);
        $student->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy($estudiante_id) {
        // Eliminando estudiante

        $student = Estudiante::find($estudiante_id);
        $student->delete();

        return redirect()->route('estudiantes.index');
    }

}
