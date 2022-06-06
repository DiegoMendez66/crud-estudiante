@extends('layouts.app')

@section('title', 'Crear')

@section('content')

<form action="{{ route('grabar')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
	@csrf

	<h1 class="text-2x1 text-center py-4 mb-4 font-semibold fs-20" style="font-size: 25px;">Crear nuevo estudiante</h1>
	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Nombre" name="estudiante_nombre">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Apellido" name="estudiante_apellido">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Edad" name="estudiante_edad">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Correo" name="estudiante_correo">

	<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-600" placeholder="Telefono" name="estudiante_telefono">

	<button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-800">Confirmar</button>
</form>

@endsection