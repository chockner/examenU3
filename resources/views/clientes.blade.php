@extends('layout')

@section('title', 'Clientes')

@section('content')
    <tr>

        <td colspan="4">
            <a href="{{ route('servicios.create') }}">Nuevo Cliente</a><br>
        </td>


    </tr>
    <tr>
        <th colspan="4">Listado de Clientes</th><br>
    </tr>

    @if ($clientes)
        <div class="container">
            <div class="row">
                @foreach ($clientes as $cliente)
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cliente->nombres }}</h5>
                                <p class="card-text">Email: {{ $cliente->email }}</p>
                                <p class="card-text">Dirección: {{ $cliente->direccion }}</p>
                                <p class="card-text">Teléfono: {{ $cliente->fono }}</p>
                                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST"
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
        <p>No existe ningún cliente</p>
    @endif

@endsection
