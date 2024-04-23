@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center">
        <div class="w-full max-w-3xl bg-white rounded-lg shadow-lg">
            <div class="flex justify-start">
                <img src="images/2267.png" alt="Producto" class="product-image">
            </div>
            <div class="px-6 py-4 contenido-producto">
                <h2 class="text-2xl font-bold text-gray-800">Nombre del Producto</h2>
                <h4 class="text-lg font-medium text-gray-600 mt-2">Características del Producto</h4>
                <p class="text-base text-gray-700 mt-2">Nuestra batería de alto rendimiento, con XX mAh, garantiza una potencia duradera para tus dispositivos electrónicos. Su diseño compacto y tecnología de carga rápida la hacen ideal para usarla en cualquier lugar. Además, cuenta con protección avanzada para un uso seguro y confiable en todo momento.</p>
                <div class="flex justify-between items-center mt-4 boton-agregar-cantidad">
                    <h6 class="text-lg font-medium text-gray-800">Precio: $XX.XX</h6>
                    <form action="#" method="POST" class="flex items-center">
                        @csrf
                        <label for="cantidad" class="mr-2">Cantidad:</label>
                        <select id="cantidad" name="cantidad" class="border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:border-blue-500">
                            @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        <button type="submit" class="bg-blue hover:bg-blue text-dark px-4 py-2 rounded-md focus:outline-none focus:bg-blue-600">Agregar al Carrito</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
