@extends('layout')

@section('content')
<h1>Agregar mascota</h1>
<form action="{{ route('mascotas.store') }}" method="POST">
  @csrf
  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="nombre">

  <label for="especie">Especie</label>
  <input type="text" id="especie" name="especie">

  <label for="edad">Edad</label>
  <input type="numeric" id="edad" name="edad" min="1" max="255">

  <button type="submit">Agregar</button>
</form>
@endsection