@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center">
        <div class="w-full max-w-3xl bg-white rounded-lg shadow-lg">
            <div class="flex justify-start">
                <img src="images/2267.png" alt="Producto" class="product-image">
            </div>
            <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
                <div class="px-6 py-4 contenido-producto">
                    <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900"><h3>Nombre del Producto</h3></dt>
                        <dd class="text-gray-700 sm:col-span-2">Nombre del Producto aquí</dd>
                    </div>
                    <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900"><H3>Precio</H3></dt>
                        <dd class="text-gray-700 sm:col-span-2">$XX.XX</dd>
                    </div>

                        <dt class="font-medium text-gray-900"><h3>Características del Producto</h3></dt>
                        <dd class="text-gray-700 sm:col-span-2">
                        Nuestra batería de alto rendimiento, con XX mAh, garantiza una potencia duradera para tus dispositivos electrónicos. Su diseño compacto y tecnología de carga rápida la hacen ideal para usarla en cualquier lugar. Además, cuenta con protección avanzada para un uso seguro y confiable en todo momento.
                        </dd>
                    </div>
                    <div class="flex justify-between items-center mt-4 boton-agregar-cantidad">
                        <form action="#" method="POST" class="flex items-center">
                            @csrf
                            <label for="cantidad" class="mr-2">Cantidad:</label>
                            <select id="cantidad" name="cantidad" class="border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:border-blue-500">
                                @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl
                             focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg 
                             text-sm px-5 py-2.5 text-center me-2 mb-2">Agregar al carrito</button>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
