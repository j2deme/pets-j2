@extends('layout')

@section('content')
<a href="{{ route('mascotas.create') }}">Agregar mascota</a>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Especie</th>
      <th>Edad</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mascotas as $mascota)
    <tr>
      <td>{{ $mascota->id }}</td>
      <td>{{ $mascota->nombre }}</td>
      <td>{{ $mascota->especie }}</td>
      <td>{{ $mascota->edad }}</td>
      <td>
        <a href="{{ route('mascotas.show', $mascota->id) }}">Ver</a>
        <a href="{{ route('mascotas.edit', $mascota->id) }}">Editar</a>
        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection