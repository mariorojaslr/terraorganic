@extends('usuarios.principalusuario')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('usuarios.update') }}" method="POST"> --}}
  <form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$usuario->descripcion}}">
  </div>
  <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
