@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
    <table cellpadding="3" cellspaceing=#5>
        <tr>
            <th colspan="4">Crear nuevo servicio</th>
        </tr>

        <form action="{{ route('servicios.store') }}" method="post">

            @csrf
            <tr>
                <th>Titulo</th>
                <td><input type="text" name="titulo", required></td>
                @error('titulo')
                    {{ $message }}<br>
                @enderror
            </tr>
            <tr>
                <th>Descripcion</th>
                <td><input type="text" name="descripcion", required></td>
                @error('descripcion')
                    {{ $message }}
                @enderror
            </tr>
            <tr>
                <td colspan="2" align="center"><button>Guardar</button></td>
            </tr>
        </form>
    </table>
@endsection
