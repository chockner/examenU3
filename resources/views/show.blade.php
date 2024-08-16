@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')

    <tr>
        <td colspan="4">{{ $servicio->descripcion }}</td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->create_at }}</td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->updated_at }}</td>
    </tr>


@endsection
