@extends('layouts.app')

@section('content')
<main>
  <section class="bg-gray-100">
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <header class="text-center">
        <h2 class="text-6xl font-bold text-gray-900 mb-6">Ofertas Destacadas</h2>
      </header>

      <div id="product-carousel" class="carousel">
        <div class="carousel-inner grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach ($articulos as $articulo)
            <div class="product product-7">
              <figure class="product-media">
                <span class="product-label label-sale">10% off</span>
                <a href="{{ route('articulo', ['id' => $articulo->id]) }}">
                  <img src="https://kallfu.eppseguridadmym.com/{{ $articulo->imagen }}" class="product-image" />
                </a>
                <div class="product-action">
                  <form action="{{ route('add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $articulo->id }}">
                    <button class="btn btn-product btn-cart" type="submit">
                      <span>&nbsp;&nbsp;&nbsp;&nbsp;Agregar al Carro &nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </button>
                  </form>
                </div>
              </figure> 
              <div class="product-body">
                <h3 class="product-title">
                  <a href="{{ route('articulo', ['id' => $articulo->id]) }}">
                    {{ $articulo->descripcion }}
                  </a>
                </h3>
                <div class="product-price">
                  <span class="new-price">$ {{ number_format($articulo->price, 0, ',', '.') }}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      
      <div class="carousel-controls text-center mt-6">
        <button class="btn btn-carousel" onclick="prevSlide()">Anterior</button>
        <button class="btn btn-carousel" onclick="nextSlide()">Siguiente</button>
      </div>
    </div>
  </section>
</main>

<script>
  let currentSlide = 0;
  const itemsPerPage = 8;
  const products = document.querySelectorAll('.carousel-inner .product');
  const totalSlides = Math.ceil(products.length / itemsPerPage);

  function updateCarousel() {
    products.forEach((product, index) => {
      product.style.display = (index >= currentSlide * itemsPerPage && index < (currentSlide + 1) * itemsPerPage) ? 'block' : 'none';
    });
  }

  function nextSlide() {
    if (currentSlide < totalSlides - 1) {
      currentSlide++;
      updateCarousel();
    }
  }

  function prevSlide() {
    if (currentSlide > 0) {
      currentSlide--;
      updateCarousel();
    }
  }

  updateCarousel();
</script>
@endsection
