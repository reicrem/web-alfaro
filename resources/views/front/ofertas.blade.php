@extends('layouts.app')

@section('content')
<main>
  <section class="bg-gray-100">
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <header class="text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Ofertas Destacadas</h2>
      </header>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($articulos as $articulo)
        <a href="{{ route('ver.articulo', ['id' => $articulo->id]) }}" class="group relative block overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition duration-300">
          <button class="absolute top-4 end-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Wishlist</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
            </svg>
          </button>
          <img src="{{ asset('images/' . $articulo->imagen) }}" alt="{{ $articulo->articulo }}" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72">
          <div class="relative border border-gray-100 bg-white p-6">
            @if ($articulo->oferta)
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium">Oferta</span>
            @endif
            <h3 class="mt-4 text-lg font-medium text-gray-900">{{ $articulo->articulo }}</h3>
            <p class="mt-1.5 text-sm text-gray-700">${{ $articulo->price }}</p>
            <form class="mt-4">
              <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                Agregar al Carrito
              </button>
            </form>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
</main>
@endsection
