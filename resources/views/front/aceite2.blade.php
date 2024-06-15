@extends('layouts.app')

@section('content')
<main>
<a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>

<section>
  <div class="mx-auto max-w-screen-xl px-4 pb-0 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class=" font-bold text-gray-900  catalogo-titulo">Aceites</h2>
    </header>

    
    <ul class="mt-3 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/7.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Castrol Magnatec 10w-40
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
            src="{{ asset('images/8.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Shell Helix HX8 5w-30
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
            src="{{ asset('images/9.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Mobil 5w-30
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
            src="{{ asset('images/10.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Mobil Super 3000 5w-30
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
  <div class="mx-auto pt-0 max-w-screen-xl px-4 mb-0 sm:px-6 sm:py-12 lg:px-8">

    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/11.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Venom 5w-30
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
            src="{{ asset('images/12.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Venom 10w-40
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
            src="{{ asset('images/13.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Venom 75w-90
            </h3>

            <p class="mt-2">
             
            <a href="{{ route('formulario') }}" class="btn btn-outline-white banner-link">Cotizar</a>
            </p>
          </div>
        </a>
      </li>

      
    </ul>
  </div>
  
  <!--
  opciones de pagina
-->

<ol class="flex justify-center gap-1 text-xl font-medium">


  <li>
    <a
      href="{{ route('aceite') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      1
    </a>
  </li>

  <li>
    <a
      href="{{ route('aceite2') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      2
    </a>
  </li>


</ol>
</section>






</main>

@endsection