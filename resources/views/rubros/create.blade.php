@extends('rubros.principalrubro')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('rubros.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="rubrodescripcion" name="rubrodescripcion" type="text" class="form-control" tabindex="3">
  </div>
  <a href="{{ route('rubros.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
