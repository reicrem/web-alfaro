@extends('layouts.app')

@section('content')
<main>
<section>
  <div class="mx-auto max-w-screen-xl px-4 pb-0 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class=" font-bold text-gray-900  catalogo-titulo">Aguas y Anticongelantes</h2>
    </header>

    <ul class="mt-3 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/agua9.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Versal Hem 611 
            </h3>

            <p class="mt-2">

            <a href="{{ route('formulario') }}" class="btn btn-outline-white banner-link">Cotizar</a>
            </p>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/agua10.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Versal Hem 611 
            </h3>

            <p class="mt-2">
            <a href="{{ route('formulario') }}" class="btn btn-outline-white banner-link">Cotizar</a>
            </p>
          </div>
        </a>
      </li>

      

      
    </ul>
  </div>
  
</section>

<section>

  
  <!--
  opciones de pagina
-->

<ol class="flex justify-center gap-1 text-xl font-medium">


  <li>
    <a
      href="{{ route('aguas') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      1
    </a>
  </li>

  <li>
    <a
      href="{{ route('aguas2') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      2
    </a>
  </li>
</ol>
</section>






</main>

@endsection