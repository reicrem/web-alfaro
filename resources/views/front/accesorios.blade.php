@extends('layouts.app')

@section('content')
<main>
<a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>

<section>
  <div class="mx-auto max-w-screen-xl px-4 pb-0 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class=" font-bold text-gray-900  catalogo-titulo">Accesorios</h2>
    </header>

    <ul class="mt-3 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/accesorio1.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Kit Cargador de Celulares
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
            src="{{ asset('images/accesorio2.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Encendedor de Cigarrillos
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
            src="{{ asset('images/accesorio3.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Manguera Hidráulica de Freno
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
            src="{{ asset('images/accesorio4.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Escobilla de Acero
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
  <!-- <div class="mx-auto pt-0 max-w-screen-xl px-4 mb-0 sm:px-6 sm:py-12 lg:px-8">

    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="{{ asset('images/pastillafreno1.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Pastilla de Freno SBP
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
            src="{{ asset('images/pastillafreno2.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Pastilla de Freno HL Mando
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
            src="{{ asset('images/pastillafreno3.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Pastilla de Freno HI Tec
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
            src="{{ asset('images/pastillafreno4.png') }}"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-2xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Pastilla de Freno SBP
            </h3>

            <p class="mt-2">

            <a href="{{ route('formulario') }}" class="btn btn-outline-white banner-link">Cotizar</a>
            </p>
          </div>
        </a>
      </li>
    </ul>
  </div> -->
  
  <!--
  opciones de pagina
-->

<!-- <ol class="flex justify-center gap-1 text-xl font-medium">


<li>
    <a
      href="{{ route('catalogo') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      1
    </a>
  </li>

  <li>
    <a
      href="{{ route('catalogo2') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      2
    </a>
  </li>

  <li>
    <a
      href="{{ route('catalogo3') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      3
    </a>
  </li>

  <li>
    <a
      href="{{ route('catalogo4') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      4
    </a>
  </li>

  <li>
    <a
      href="{{ route('catalogo5') }}"
      class="block size-10 mb-5 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
    >
      5
    </a>
  </li>

</ol> -->
</section>






</main>

@endsection