@extends('layouts.app')

@section('content')


<a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>

<main class="main">
    <div class="container">
        <div id="" class=" carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-inner  rounded-lg w-auto h-auto image-slider">
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
        <span class="relative flex justify-center">
        <div
          class=" absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-black to-transparent "></div>
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
                                    
                                    
                                    "autoplayHoverPause":true,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":1
                                        },
                                        "768": {
                                            "items":1
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
          </div>

            
        </div>
        
      </div>
      
    </div>
    

    <section class="body-font quiensomos">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded animate-on-scroll" alt="local" src="{{ asset('images/local.jpeg') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start items-center text-center md:text-left">
      <h1 class="title-font sm:text-6xl text-5xl mb-4 font-medium text-white animate-on-scroll">¿Quiénes somos?
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-4 text-3xl text-white leading-relaxed px-4 animate-on-scroll">Bienvenidos a Alfaro Repuestos, su tienda confiable para repuestos de automóviles de alta calidad. Nos dedicamos a ofrecer piezas y accesorios de primera a precios competitivos, asegurando que su vehículo esté siempre en óptimas condiciones.</p>
      <p class="mb-4 text-3xl text-white leading-relaxed px-4 animate-on-scroll">En Alfaro Repuestos, contamos con un equipo de expertos listos para brindarle el mejor servicio y asesoramiento profesional. Ofrecemos una amplia gama de productos, desde componentes de motor hasta accesorios de interior, todos de los fabricantes más reconocidos.</p>
      <p class="mb-4 text-3xl text-white leading-relaxed px-4 animate-on-scroll">Nuestra misión es proporcionar una experiencia de compra fácil y conveniente. Su satisfacción es nuestra prioridad. Gracias por elegirnos para todas sus necesidades de repuestos de automóviles.</p>
    </div>
  </div>
</section>




    <section>
  <div class="mx-auto max-w-screen-1xl px-4 sm:px-6 sm:py-12 lg:px-8 pb-2">
    <ul class=" grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-1.png') }}" alt="Carroceria" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Carroceria</h3>
          <a href="{{ route('carroceria') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>

      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-2.png') }}" alt="Catalogo" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Catalogo</h3>
          <a href="{{ route('catalogo') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black hover:text-black hover:shadow-md font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>

      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-3.png') }}" alt="Accesorios" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Accesorios</h3>
          <a href="{{ route('accesorios') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>

      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-4.png') }}" alt="Aditivos" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Aditivos</h3>
          <a href="{{ route('aceite') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>

      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-6.png') }}" alt="Baterias" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Baterias</h3>
          <a href="{{ route('baterias') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>

      <li class="relative group block overflow-hidden border border-gray-200 rounded-xl">
        <img src="{{ asset('images/banner-7.png') }}" alt="Correas" class="h-[380px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[480px]" />
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl">
          <h3 class="text-5xl text-white font-normal font-mono">Correas</h3>
          <a href="{{ route('correas') }}" class="mt-2 px-4 py-2 fondoboton text-white rounded-full transition duration-300 btn hover:bg-black font-medium font-mono text-2xl">Comprar ahora</a>
        </div>
      </li>
    </ul>
  </div>
</section>
                
                

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
  
<!-- script del quienes somos -->
<script>   
  document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('tracking-in-expand-forward-top');
      } else {
        entry.target.classList.remove('tracking-in-expand-forward-top');
      }
    });
  });

  const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
  elementsToAnimate.forEach(element => {
    observer.observe(element);
  });
});
</script>

<!-- script del boton de whatsap -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.querySelector('.whatsapp-button');

    // Función para agregar la clase de animación
    function startAnimation() {
        whatsappButton.classList.add('jello-horizontal');
    }

    // Función para quitar la clase de animación
    function stopAnimation() {
        whatsappButton.classList.remove('jello-horizontal');
    }

    // Activar la animación automáticamente y repetirla cada 15 segundos
    startAnimation();
    setInterval(function() {
        stopAnimation(); // Detener la animación
        setTimeout(startAnimation, 100); // Agregar la clase de animación después de un breve tiempo
    }, 8000); // Repetir cada 8 segundos
});
</script>
  
</main>
@endsection
