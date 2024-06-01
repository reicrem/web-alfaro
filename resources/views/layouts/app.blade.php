<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Alfaro Repuestos</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png" />
  <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
  <!-- Plugins line-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" />
  <!-- Plugins CSS File -->
  <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

  <!-- Main CSS File -->
  
  @vite(['resources/css/app.css','resources/css/style.css','resources/css/skin.css','resources/js/app.js',
  'resources/js/jquery.waypoints.min.js','resources/js/bootstrap-input-spinner.js','resources/js/jquery.plugin.min.js',
  'resources/js/main.js',])

</head>

<body>
  <div class="page-wrapper">

    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
  
  </div>
  <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay"></div>
<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>
<nav class="mobile-nav">
    <ul class="mobile-menu">
        <li class="active">
            <a href="{{ route('inicio') }}">INICIO</a>
            
        </li>
        <li><a href="{{ route('catalogo') }}">Catalogo</a></li>
        <li>
            <a href="{{ route('amortiguador') }}">AMORTIGUADORES</a>

        </li>
        <li>
            <a href="{{ route('aceite') }}" class="sf-with-ul">LUBRICANTES</a>
            <ul>
           
                <li><a href="#">Aceite Motor</a></li>
                <li><a href="#">Aceite Caja</a></li>
                <li><a href="#">Aceite Motos</a></li>
                <li><a href="{{ route('aguas') }}">Aguas</a></li>
                <li><a href="{{ route('aguas') }}">Anticongelantes Y Refrigerantes</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('filtros') }}">FILTROS</a>
            <ul>
               
                <li><a href="#">Filtros de Aceite</a></li>
                <li><a href="#">Filtros de Aire</a></li>
                <li><a href="#">Filtros de Petroleo</a></li>
                <li><a href="#">Filtros de Bencina</a></li>
                <li><a href="#">Filtros de Cabina</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('baterias') }}">BATERIAS</a>
            <ul>
                
                <li><a href="#">Baterias de Auto</a></li>
                <li><a href="#">Baterias de Moto</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('iluminacion') }}">ILUMINACIÓN</a>
            <ul>
                
                <li><a href="#">Halogenas</a></li>
                <li><a href="#">Incandesentes</a></li>
                <li><a href="#">Led</a></li>
                <li><a href="#">Opticos</a></li>
                <li><a href="#">Neblineros</a></li>
                <li><a href="#">Faena</a></li>
                <li><a href="#">Farol Trasero</a></li>
                <li><a href="#">Farol Lateral</a></li>
                <li><a href="#">Farol Patente</a></li>
                <li><a href="#">Tercera Luz</a></li>
                <li><a href="#">Telecomando luces</a></li>
                <li><a href="#">fusibles</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('accesorios') }}">ACCESORIOS</a>

        </li>
        <li>
            <a href="{{ route('herramientas') }}">HERRAMIENTAS</a>
    
        </li>
    </ul>
</nav>
        <div class="social-icons">
            <a href="https://web.facebook.com/alfarorepuestos?locale=es_LA" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="https://www.instagram.com/alfaroadm/" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        </div>
    </div>
</div>

  <!-- End .mobile-menu-container -->

  <!-- Sign in / Register Modal -->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="icon-close"></i></span>
          </button>
          <div class="form-box">
            <div class="form-tab">
              <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin"
                    aria-selected="true">Sign In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register"
                    aria-selected="false">Register</a>
                </li>
              </ul>
              <div class="tab-content" id="tab-content-5">
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                  <form action="#">
                    <div class="form-group">
                      <label for="singin-email">Username or email address *</label>
                      <input type="text" class="form-control" id="singin-email" name="singin-email" required />
                    </div>
                    <div class="form-group">
                      <label for="singin-password">Password *</label>
                      <input type="password" class="form-control" id="singin-password" name="singin-password" required />
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-outline-primary-2">
                        <span>LOG IN</span>
                        <i class="icon-long-arrow-right"></i>
                      </button>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signin-remember" />
                        <label class="custom-control-label" for="signin-remember">Remember Me</label>
                      </div>
                      <a href="#" class="forgot-link">Forgot Your Password?</a>
                    </div>
                  </form>
                  <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-g">
                          <i class="icon-google"></i>
                          Login With Google
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-f">
                          <i class="icon-facebook-f"></i>
                          Login With Facebook
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                  <form action="#">
                    <div class="form-group">
                      <label for="register-email">Your email address *</label>
                      <input type="email" class="form-control" id="register-email" name="register-email" required />
                    </div>
                    <div class="form-group">
                      <label for="register-password">Password *</label>
                      <input type="password" class="form-control" id="register-password" name="register-password" required />
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-outline-primary-2">
                        <span>SIGN UP</span>
                        <i class="icon-long-arrow-right"></i>
                      </button>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="register-policy" required />
                        <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                      </div>
                    </div>
                  </form>
                  <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-g">
                          <i class="icon-google"></i>
                          Login With Google
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-f">
                          <i class="icon-facebook-f"></i>
                          Login With Facebook
                        </a>
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
  </div>

  <!-- Plugins JS File -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.0/jquery.hoverIntent.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.1.0/jquery.countdown.min.js"></script>  
</body>

</html>
