@extends('layouts.app') <!-- O tu layout principal -->

@section('content')
<div class="container">
    <h1>{{ $producto->nombre }}</h1>
    <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
    <p>{{ $producto->descripcion }}</p>

    <!-- Mostrar la imagen del producto -->
    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid">

    <!-- Formulario para agregar al carrito -->
    <form action="{{ route('agregar.al.carrito', $producto->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
    </form>
</div>
@endsection
