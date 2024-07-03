@extends('layouts.app')

@section('content')
  <main class="main">
  <a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>
    <div class="page-header text-center" style="background-image: url('{{ asset('images/page-header.jpg') }}')">
      <div class="container">
        <h1 class="page-title">Checkout</h1>
      </div>
    </div>
    <div class="mb-4"></div>
    <div class="page-content">
      <div class="checkout">
        <div class="container">
          <form action="{{ route('storeshop') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-9">
                <h2 class="checkout-title">Datos para la compra</h2>
                <div class="row">
                  <div class="col-sm-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" required >
                  </div>
                  <div class="col-sm-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="apellido" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label>RUT</label>
                    <input type="text" class="form-control" name="rut" required>
                  </div>
                  <div class="col-sm-6">
                    <label>Telefono</label>
                    <input type="text" class="form-control" name="telefono" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <label>Dirección</label>
                    <input type="text" class="form-control" placeholder="Calle" name="direccion" required>
                  </div>
                  <div class="col-sm-4">
                    <label>Numero de calle o S/N </label>
                    <input type="text" class="form-control" placeholder="Numero" name="numero" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label>Comuna</label>
                    <input type="text" class="form-control" name="comuna" required>
                  </div>
                  <div class="col-sm-6">
                    <label>Región</label>
                    <input type="text" class="form-control" name="region" required>
                  </div>
                </div>
                <label>Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $email }}" required>
              </div>
              <aside class="col-lg-3">
                <div class="summary">
                  <h3 class="summary-title">Su Pedido</h3>
                  <table class="table table-summary">
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach (Cart::content() as $item)
                        <tr>
                          <td><a href="#">{{ $item->name }}</a></td>
                          <td>$ {{ number_format($item->qty * $item->price, 0, ',', '.') }}</td>
                        </tr>
                      @endforeach
                      <tr class="summary-subtotal">
                        <td>Total Neto:</td>
                        <td>$ {{ number_format(Cart::subtotal(), 0, ',', '.') }}</td>
                      </tr>
                      <tr>
                        <td>IVA:</td>
                        <td>$ {{ number_format(Cart::tax(), 0, ',', '.') }}</td>
                      </tr>
                      <tr class="summary-total">
                        <td>Total:</td>
                        <td>$ {{ number_format(Cart::total(), 0, ',', '.') }}</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="accordion-summary" id="accordion-payment">
                    <div class="card">
                      <div class="card-header" id="heading-1">
                        <h2 class="card-title">
                          <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Transferencia Bancaria
                          </a>
                        </h2>
                      </div>
                      <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                        <div class="card-body">
                          Realice su pago directamente en nuestra cuenta bancaria. <br>
                          Utilice su ID de pedido como referencia de pago. <br>
                          Tu pedido no será enviado hasta que los fondos se hayan verificado en nuestra cuenta.
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                    <span class="btn-text">Realizar Pedido</span>
                    <span class="btn-hover-text">Realizar Pedido</span>
                  </button>
                </div>
              </aside>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

@endsection
