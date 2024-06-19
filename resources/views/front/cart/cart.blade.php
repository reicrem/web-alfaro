@extends('layouts.app')

@section('content')

  <main class="main">

  <a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>
    <div class="page-header text-center" style="background-image: url('{{ asset('images/page-header.jpg') }}')">
      <div class="container">
        <h1 class="page-title">Carro de Compras</h1>
      </div>
    </div>
    <div class="mb-4"></div>
    <div class="page-content">
      <div class="cart">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              @if (Cart::count())
                <table class="table table-cart table-mobile">
                  <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (Cart::content() as $item)
                      <tr>
                        <td class="product-col">
                          <div class="product">
                            <figure class="product-media">
                              <a href="#">
                                <img src="https://kallfu.eppseguridadmym.com/{{ $item->options->image }}">
                              </a>
                            </figure>
                            <h3 class="product-title">
                              <a href="#">{{ $item->name }}</a>
                            </h3>
                          </div>
                        </td>
                        <td class="quantity-col">
                          <div class="cart-product-quantity">
                            <div class="d-flex">
                              <form action="{{ route('increaseQuantity') }}" method="post">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                <button type="submit" class="btn-incre"><i class="icon-plus"></i></button>
                              </form>
                              <p> {{ $item->qty }}</p>
                              <form action="{{ route('decreaseQuantity') }}" method="post">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                <button type="submit" class="btn-incre"><i class="icon-minus"></i></button>
                              </form>
                            </div>
                          </div>
                        </td>
                        <td class="price-col">$ {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td class="total-col">$ {{ number_format($item->qty * $item->price, 0, ',', '.') }}</td>
                        <td class="remove-col">
                          <form action="{{ route('remove') }}" method="post">
                            @csrf
                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                            <button class="btn-remove"><i class="icon-close"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="cart-bottom">
                  <div class="cart-discount">
                    <a href="/" class="btn btn-outline-dark-2 btn-block mb-3">
                      <span>Seguir comprando</span><i class="icon-refresh"></i>
                    </a>
                  </div>
                  <a href="{{ route('clear') }}" class="btn btn-outline-dark-2">
                    <span>Vaciar carro</span><i class="icon-close"></i>
                  </a>
                </div>
              @else
                <a href="/" class="btn btn-outline-dark-2">
                  <span>El carro esta vacio</span><i class="icon-refresh"></i>
                </a>
              @endif
              <div class="cart-bottom"></div>
            </div>
            <aside class="col-lg-3">
              <div class="summary summary-cart">
                <h3 class="summary-title">Total Carro</h3>
                <table class="table table-summary">
                  <tbody>
                    <tr class="summary-subtotal">
                      <td>Total Neto:</td>
                      <td>$ {{ number_format(Cart::subtotal(), 0, ',', '.') }}</td>
                    </tr>
                    <tr class="summary-subtotal">
                      <td>IVA:</td>
                      <td>$ {{ number_format(Cart::tax(), 0, ',', '.') }}</td>
                    </tr>
                    <tr class="summary-total">
                      <td>Total:</td>
                      <td>$ {{ number_format(Cart::total(), 0, ',', '.') }}</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">Continuar</a>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
