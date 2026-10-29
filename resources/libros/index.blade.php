@extends('layouts.app')

@section('title', 'Listado de libros')

@section('content')

    <h2>Listado de libros</h2>

    @if ($libros->count() > 0)

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicación</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>No hay libros registrados en la base de datos.</p>

    @endif

@endsection