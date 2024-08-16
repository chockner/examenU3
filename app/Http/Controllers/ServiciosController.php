<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::get();

        return view('servicios', compact('servicios'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $titulo = request('titulo');
        $descripcion = request('descripcion');

        Servicio::create([
            'titulo' => $titulo,
            'descripcion' => $descripcion
        ]);

        return redirect()->route('servicios.index');
    }

    public function edit(Servicio $servicio)
    {
        return view('edit', compact('servicio'));
    }

    public function update(Servicio $servicio)
    {
        $servicio->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion')
        ]);
        return redirect()->route('servicios.index');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
