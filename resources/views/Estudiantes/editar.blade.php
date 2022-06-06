@extends('layouts.app')

@section('title', 'Editar')

@section('content')

<form action="{{ route('estudiantes.update', $student->estudiante_id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
	@csrf
	@method('put')

	<h1 class="text-2x1 text-center py-4 mb-4 font-semibold" style="font-size:25px">Actualizar estudiante # {{ $student->estudiante_id }}</h1>
	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Nombre" name="estudiante_nombre" value="{{ $student->estudiante_nombre }}">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Apellido" name="estudiante_apellido" value="{{ $student->estudiante_apellido }}">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Edad" name="estudiante_edad" value="{{ $student->estudiante_edad }}">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Correo" name="estudiante_correo" value="{{ $student->estudiante_correo }}">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Telefono" name="estudiante_telefono" value="{{ $student->estudiante_telefono }}">

	<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-800">Confirmar</button>
</form>

@endsection