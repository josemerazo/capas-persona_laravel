@extends('template.page')
@section('cuerpo')
    <h2>Creación de persona</h2>

    <form method="post" action="{{ isset($persona) ? route('persona.update', $persona->id) : route('persona.store') }}">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre"
                value="{{ isset($persona) ? $persona->nombre : '' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="apellido"
                value="{{ isset($persona) ? $persona->apellido : '' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nacimiento</label>
            <input type="date" class="form-control"   value="{{ isset($persona) ? $persona->nacimiento : '0' }}"  id="exampleInputEmail1" name="nacimiento">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estatura</label>
            <input type="number" step="0.1" max="2.1" class="form-control" id="exampleInputEmail1"
                value="{{ isset($persona) ? $persona->estatura : '0' }}" name="estatura">
        </div>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
@endsection
