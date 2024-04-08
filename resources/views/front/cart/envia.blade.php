@extends('layouts.app')

@section('content')
  <main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('images/page-header.jpg') }}')">
      <div class="container">
        <h1 class="page-title">Checkout</h1>
      </div>
    </div>
    <div class="mb-4"></div>

     <div class="page-content">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="checkout-title text-center">
            Gracias por su preferencia, pronto recibira un correo con la confirmación de si compra.
            <br><br>
          <a href="/" class="btn btn-primary btn-rounded">
            <span>Inicio</span>
            <i class="fas fa-house"></i>
          </a>
        </h3>
        </div>
      </div>
      
    </div>
  </main>

@endsection
