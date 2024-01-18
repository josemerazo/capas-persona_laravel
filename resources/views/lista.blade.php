@extends('template.page')
@section('cuerpo')
    <h1>Listado de personas</h1>
    <a type="button" href="{{ route('persona.create', 'id=0') }}" class="btn btn-primary">Nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Cod.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nacimiento</th>
                <th scope="col">Estatura</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <th>
                        <a href="{{ route('persona.edit', 'id=' . $persona->id) }}" type="button"
                            class="btn btn-primary">Editar</a>
                        <form method="post" action="{{ route('persona.delete', $persona->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            {{-- <input type="hidden" name="id" value="{{ $persona->id }}"> --}}
                            <button type="submit"class="btn  btn-danger">Eliminar</button>
                        </form>
                    </th>
                    <th scope="row">{{ $persona->id }}</th>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido }}</td>
                    <td>{{ $persona->nacimiento }}</td>
                    <td>{{ $persona->estatura }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
