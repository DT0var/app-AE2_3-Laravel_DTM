<?php

namespace App\Http\Controllers;

use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }
}
