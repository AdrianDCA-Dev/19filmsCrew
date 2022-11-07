<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Inicio;
use App\Models\Post;
use Illuminate\Http\Request;

class IniciosController extends Controller
{
    public function index()
    {
        return view('panel.inicio.index');
    }

    public function create()
    {
        return view('panel.inicio.create');
    }

    public function edit(Inicio $inicio)
    {
        //$this->authorize('update', $inicio);
        return view('panel.inicio.edit', compact('inicio'));
    }
}
