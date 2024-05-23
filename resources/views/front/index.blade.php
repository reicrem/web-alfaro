@extends('layouts.app')

@section('content')
<main class="main">
    <div class="container">
        <div id="" class=" carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-inner  rounded-lg w-126 h-82 image-slider">
                <div class="carousel-item active">
                    <img src="images/slide.png" class="d-block w-full" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.png" class="d-block w-full" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.png" class="d-block w-full" alt="Slide 3">
                </div>
            </div>
          
        </div>
    </div>

    <div class="container py-3">
    <div class="section_maintitle wow fadeInDown animated hover" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInDown;">
    <span class="relative flex justify-center">
  <div
    class=" absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-black to-transparent "
  ></div>
  <span class="relative z-10 bg-white px-6"><h3 class="heading text-capitalize text-center t-destacado-2 ">Amplia Cobertura para Diversas Marcas</h3></span>
</span> 
    </div>
    <div class="recruitercontainer">
    <div class="carousel-container">
    <div class="carousel">
      <img src="{{ asset('images/Chevrolet.png') }}" alt="chevrolet">
      <img src="{{ asset('images/Toyota.png') }}" alt="Logo 1">
      <img src="{{ asset('images/suzuki.png') }}" alt="Logo 3">
      <img src="{{ asset('images/MG.png') }}" alt="Logo 3">
      <img src="{{ asset('images/Nissan.png') }}" alt="Logo 3">
      <img src="{{ asset('images/Maxus.png') }}" alt="Logo 3">
      <img src="{{ asset('images/Changan.png') }}" alt="Logo 3">
      <img src="{{ asset('images/Mazda.png') }}" alt="Logo 3">
      <img src="{{ asset('images/Kia.png') }}" alt="Logo 3">
      <img src="{{ asset('images/chery.png') }}" alt="Logo 3">
      <img src="{{ asset('images/hyundai.png') }}" alt="Logo 3">
    </div>
</div>


    <div class="container featured mt-4 pb-2">
      <div class="heading heading-flex mb-3">
       
        <div class="heading-right"></div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="banner banner-overlay product-banner">
            <a href="#">
              <img src="{{ asset('images/banner-5.png') }}" />
            </a>
            <div class="banner-content">
              <div class="banner-top">
                <div class="banner-title text-white text-center">
                  <i class="la la-star-o"></i>
                  
                  <h3 class="text-white">¿Qué marca de auto tienes? Pregúntanos si lo tenemos</h3>
                </div>
              </div>
              <div class="banner-bottom">
                
                <a href="{{ route('formulario') }}" class="btn btn-outline-white banner-link">Cotizar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
        <span class="relative flex justify-center">
        <div
          class=" absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-black to-transparent "
        ></div>
        <span class="relative z-10 bg-white px-6"><h3 class="t-destacado">Productos en Oferta</h3></span>
      </span> 
                
          <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": true,
                                    "autoplay":true,
                                    "autoplayTimeout":5000,
                                    "autoplayHoverPause":true,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":3,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>

                @foreach ($articulos as $articulo)
                
                  <div class="product product-7">
                    <figure class="product-media">
                      <a href="{{ route('articulo', ['id' => $articulo->id]) }}">
                        <img src="https://www.alfarorepuestos.cl/kallfu/{{ $articulo->imagen }}" class="product-image" />
                        <img src="https://www.alfarorepuestos.cl/kallfu/{{ $articulo->imagen }}" class="product-image-hover" />
                      </a>
                      <div class="product-action-vertical">
                        <a href="{{ route('producto') }}" class="btn-product-icon btn-quickview"><span>Ver</span></a>
                      </div>
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
                        <span class="new-price">$ {{ $articulo->price }}</span>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 ">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="{{ asset('images/banner-1.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a >Carroceria</a></h3>
                            <a href="{{ route('carroceria') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="banner banner-overlay">
                        <a href="{{ route('catalogo') }}">
                            <img src="{{ asset('images/banner-2.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white">
                                <a >Catalogo</a>
                            </h3>
                            <a href="{{ route('catalogo') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="banner banner-overlay">
                        <a href="{{ route('catalogo') }}">
                            <img src="{{ asset('images/banner-3.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a >Accesorios</a></h3>
                            <a href="{{ route('accesorios') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="banner banner-overlay">
                        <a href="{{ route('catalogo') }}">
                            <img src="{{ asset('images/banner-4.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a >Aditivos</a></h3>
                            <a href="{{ route('aceite') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-10">
                    <div class="banner banner-overlay">
                        <a href="{{ route('catalogo') }}">
                            <img src="{{ asset('images/banner-6.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a >Baterias</a></h3>
                            <a href="{{ route('baterias') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 ">
                    <div class="banner banner-overlay">
                        <a href="{{ route('catalogo') }}">
                            <img src="{{ asset('images/banner-7.png') }}" alt="Banner" />
                        </a>
                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a >Correas</a></h3>
                            <a href="{{ route('correas') }}" class="btn btn-outline-white banner-link">Comprar ahora</a>
                        </div>
                    </div>
                </div>
                
                

    </div>
     </div>
    </div>
     </div>
     </div>
  </div>
  </div>
  <script>
    const carousel = document.querySelector('.carousel');
let counter = 0;
const interval = setInterval(() => {
    counter++;
    carousel.style.transform = `translateX(${-counter * 100}px)`; // Ajusta el valor de acuerdo al tamaño de las imágenes
    if (counter >= carousel.children.length - 1) {
        counter = 0;
        setTimeout(() => {
            carousel.style.transition = 'none';
            carousel.style.transform = 'translateX(0)';
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease';
            });
        }, 500);
    }
}, 2000); //
  </script>
  
</main>
@endsection
