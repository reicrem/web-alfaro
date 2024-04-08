@extends('layouts.app')

@section('content')
  <main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('images/page-header.jpg') }}')">
      <div class="container">
        @foreach ($titulo as $titulo)
          <h1 class="page-title">{{ $titulo->titulo }}</h1>
        @endforeach
      </div>
    </div>

    <div class="mb-4"></div>

    <div class="page-content">
      <div class="container">
        <div class="products">
          <div class="row">

            @foreach ($categorias as $categoria)
              <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <div class="product">
                  <figure class="product-media">
                    <!-- <span class="product-label label-new">New</span> -->
                    <a href="{{ route('articulo', ['id' => $categoria->id]) }}">
                      <img src="https://kallfu.eppseguridadmym.com/{{ $categoria->imagen1 }}" class="product-image">
                    </a>
                    <div class="product-action action-icon-top">
                      <form action="{{ route('add') }}" method="POST" id="f_prod">
                        @csrf
                        <input type="hidden" name="id" value="{{ $categoria->id }}">
                        <button class="btn btn-product btn-cart"></button>
                      </form>
                      <a href="{{ route('articulo', ['id' => $categoria->id]) }}" class="btn-product btn-quickview"></a>
                    </div>
                  </figure>
                  <div class="product-body">
                    <div class="product-cat">
                      <a href="#">{{ $categoria->titulo }}</a>
                    </div>
                    <h3 class="product-title"><a href="{{ route('articulo', ['id' => $categoria->id]) }}">{{ $categoria->articulo }}</a></h3>
                    <div class="product-price">
                      $ {{ $categoria->price }}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
