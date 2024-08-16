@extends('layout')

@section('title', 'Servicio')

@section('content')
    <tr>
        <td colspan="4">
            <a href="{{ route('servicios.create') }}">Nuevo Servicio</a><br>
        </td>
    </tr>
    <tr>
        <th colspan="4">Listado de Servicios</th><br>
    </tr>

    @if ($servicios)
        <div class="container">
            <div class="row">
                @foreach ($servicios as $servicio)
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $servicio->titulo }}</h5>
                                <p class="card-text">{{ $servicio->descripcion }}</p>
                                <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('servicios.destroy', $servicio) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <li>No existe ningun servicios</li>
    @endif




@endsection
