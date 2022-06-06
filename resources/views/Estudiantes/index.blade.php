@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full justify-center">
          <thead>
            <tr class="bg-blue-500 text-white">
              <th class="w-20 py-4">ID</th>
              <th class="w-1/16 py-4">Nombre</th>
              <th class="w-1/16 py-4">Apellido</th>
              <th class="w-1/32 py-4">Edad</th>
              <th class="w-1/16 py-4">Correo</th>
              <th class="w-1/16 py-4">Telefono</th>
              <th class="w-30 py-4">Actions</th>
            </tr>
          </thead>
          <tbody>
          	@foreach ($estudiantes as $row)
            <tr>
              <td class="py-3 px-6 text-center">{{ $row->estudiante_id }}</td>
              <td class="p-3 text-center">{{ $row->estudiante_nombre }}</td>
              <td class="p-3 text-center">{{ $row->estudiante_apellido }}</td>
              <td class="p-3 text-center">{{ $row->estudiante_edad }}</td>
              <td class="p-3 text-center">{{ $row->estudiante_correo }}</td>
              <td class="p-3 text-center">{{ $row->estudiante_telefono }}</td>
              <td class="p-3 flex justify-center">
                <form action="{{ route('estudiantes.destroy', $row->estudiante_id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-2">
                  <i class="fas fa-trash"></i></button>
                </form>
                <a href=" {{ route('estudiantes.edit', $row->estudiante_id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                <i class="fas fa-pen"></i></a>
              </td>
            </tr>
            @endforeach
           </tbody>
        </table>
</div>
@endsection