<header class="header header-6">
  <div class="header-top">
    <div class="container">
      <div class="header-left">
        <ul class="top-menu top-link-menu d-none d-md-block">
          <li>
            <a href="#">Links</a>
            <ul>
              <li><i class="icon-phone"></i> +569 7967 1133 | VENTAS@ALFAROREPUESTOS.CL</li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="header-right">
        <div class="social-icons social-icons-color">
          <a href="https://web.facebook.com/alfarorepuestos?locale=es_LA" class="social-icon social-facebook" target="_blank"><i class="icon-facebook-f"></i></a>
          <a href="https://www.instagram.com/alfaroadm/" class="social-icon social-instagram" target="_blank"><i class="icon-instagram"></i></a>
        </div>
        <ul class="top-menu top-link-menu">
          <li>
            <a href="#">Links</a>
            <ul>
              @auth
                <li>
                  <div class="header-dropdown">
                    <a href="#">{{ auth()->user()->nombre }}</a>
                    <div class="header-menu">
                      <ul>
                        <li><a href="#">Pedidos</a></li>
                        <li><a href="#">Articulos</a></li>
                        <li><a href="logout">Cerrar Sesión</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              @endauth
              @guest
                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i> Iniciar sesión</a></li>
              @endguest
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header-middle">
    <div class="container">
      <div class="header-left">
        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
          <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
          <form action="#" method="get">
            <div class="header-search-wrapper search-wrapper-wide">
              <label for="q" class="sr-only">Buscar</label>
              <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
              <input type="search" class="form-control" name="q" id="q" placeholder="Buscar producto..." required />
            </div>
          </form>
        </div>
      </div>
      <div class="header-center">
        <a href="index.php" class="logo">
          <img src="{{ asset('images/logito.png') }}" alt="Logo" width="130" height="70" />
        </a>
      </div>
      <div class="header-right">
        <div class="dropdown cart-dropdown">
          <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            data-display="static">
            <i class="icon-shopping-cart"></i>
            <span class="cart-count">{{ \Cart::count() }}</span>
            <span class="cart-txt">$ {{ number_format(Cart::total(), 0, ',', '.') }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-cart-products">
              @foreach (Cart::content() as $item)
                <div class="product">
                  <div class="product-cart-details">
                    <h4 class="product-title">
                      <a href="product.html">{{ $item->name }}</a>
                    </h4>
                    <span class="cart-product-info">
                      <span class="cart-product-qty">{{ $item->qty }}</span>
                      x {{ number_format($item->price, 0, ',', '.') }} = {{ number_format($item->qty * $item->price, 0, ',', '.') }}
                    </span>
                  </div>
                  <figure class="product-image-container">
                    <a href="#" class="product-image">
                      <img src="https://kallfu.eppseguridadmym.com/{{ $item->options->image }}">
                    </a>
                  </figure>
                  <a href="#" class="btn-remove" title="Eliminar Articulo"><i class="icon-close"></i>
                    <form action="{{ route('remove') }}" method="post">
                      @csrf
                      <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                      <input type="submit" name="btn" class="btn-remove" value="X">
                    </form>
                  </a>
                </div>
              @endforeach
            </div>
            <div class="dropdown-cart-total">
              <span>Total</span>
              <span class="cart-total-price">$ {{ number_format(Cart::total(), 0, ',', '.') }}</span>
            </div>
            <div class="dropdown-cart-action">
              <a href="{{ route('cart') }}" class="btn btn-primary boton-carro"><span class="ver-carro">Ver Carro</span></a>
              <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 boton-comprar"><span class="comprar-carro">Comprar</span><i class="icon-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom sticky-header">
    <div class="container">
      <div class="header-left">
        <nav class="main-nav">
          <ul class="menu sf-arrows">
            <li class="active">
              <a href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li>
              <a href="{{ route('amortiguador') }}">Amortiguiadores</a>
            </li>
            <li>
              <a href="{{ route('aceite') }}" class="sf-with-ul">Lubricantes</a>
              <div class="megamenu megamenu-md ">
                <div class="row no-gutters">
                  <div class="col-md-8 menu-drop">
                    <div class="menu-col">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="menu-title">Lubricantes</div>
                          <ul>
                            <li><a href="">Aceite Motor</a></li>
                            <li><a href="">Aceite Caja</a></li>
                            <li><a href="">Aceite Motos</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <div class="menu-title">Agua y Anticongelantes</div>
                          <ul>
                            <li><a href="{{ route('aguas') }}">Aguas</a></li>
                            <li><a href="{{ route('aguas') }}">Anticongelantes Y Refrigerantes</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="banner banner-overlay">
                      <a href="category.html" class="banner banner-menu">
                        <img src="images/banner.png" alt="Banner" />
                        <div class="banner-content banner-content-top">
                          <div class="banner-title-2 text-white ">
                          ¡Últimas  <br />Ofertas<br /><span><strong>Imperdibles!</strong></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="{{ route('filtros') }}" class="sf-with-ul">Filtros</a>
              <div class="megamenu megamenu-md">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="menu-col">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="menu-title">Filtros</div>
                          <ul>
                            <li><a href="">Filtros de Aceite</a></li>
                            <li><a href="">Filtros de Aire</a></li>
                            <li><a href="">Filtros de Petroleo</a></li>
                            <li><a href="">Filtros de Bencina</a></li>
                            <li><a href="">Filtros de Cabina</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <div class="menu-title">Otros</div>
                          <ul>
                            <li><a href="{{ route('catalogo') }}">Herramientas</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="banner banner-overlay">
                      <a href="category.html" class="banner banner-menu">
                        <img src="images/banner.png" alt="Banner" />
                        <div class="banner-content banner-content-top">
                          <div class="banner-title-2 text-white">
                          ¡Últimas  <br />Ofertas<br /><span><strong>Imperdibles! </strong></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="{{ route('baterias') }}" class="sf-with-ul">Baterias</a>
              <div class="megamenu megamenu-md">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="menu-col">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="menu-title">Baterias</div>
                          <ul>
                            <li><a href="">Baterias de Auto</a></li>
                            <li><a href="">Baterias de Moto</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <div class="menu-title">Accesorios Baterias</div>
                          <ul>
                            <li><a href="">Cargadores de Baterias</a></li>
                            <li><a href="">Cables de Baterias</a></li>
                            <li><a href="">Accesorios Baterias</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="banner banner-overlay">
                      <a href="{{ route('catalogo') }}" class="banner banner-menu">
                        <img src="images/banner.png" alt="Banner" />
                        <div class="banner-content banner-content-top">
                          <div class="banner-title-2 text-white">
                          ¡Últimas  <br />Ofertas<br /><span><strong>Imperdibles! </strong></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="{{ route('iluminacion') }}" class="sf-with-ul">Iluminaci&oacute;n</a>
              <div class="megamenu megamenu-md">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="menu-col">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="menu-title">Ampolletas</div>
                          <ul>
                            <li><a href="">Halogenas</a></li>
                            <li><a href="">Incandesentes</a></li>
                            <li><a href="">Led</a></li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <div class="menu-title">Faroles</div>
                          <ul>
                            <li><a href="">Opticos</a></li>
                            <li><a href="">Neblineros</a></li>
                            <li><a href="">Faena</a></li>
                            <li><a href="">Farol Trasero</a></li>
                            <li><a href="">Farol Lateral</a></li>
                            <li><a href="">Farol Patente</a></li>
                            <li><a href="">Tercera Luz</a></li>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <div class="menu-title">Componentes Electricos</div>
                          <ul>
                            <li><a href="">Telecomando luces</a></li>
                            <li><a href="">fusibles</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="{{ route('accesorios') }}">Accesorios</a></li>
            <li><a href="{{ route('herramientas') }}">Herramientas</a></li>
          </ul>
        </nav>
        <button class="mobile-menu-toggler">
          <span class="sr-only">Toggle mobile menu</span>
          <i class="icon-bars"></i>
        </button>
      </div>
      <div class="header-right">
        
      </div>
    </div>
  </div>
</header>
