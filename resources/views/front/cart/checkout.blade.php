@extends('layouts.app')

@section('content')
  <main class="main">
  <a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>
    <div class="mb-3"></div>

    <div class="cta cta-separator mb-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="cta-wrapper cta-text text-center">
            <h3 class="cta-title">Compra iniciando sesión</h3>
            <p class="cta-desc">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                  autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-footer">

                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Ingresar') }}
                  </button>
                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                  @endif
                </div>
              </div>
            </form>

            </p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="cta-wrapper text-center">
            <h3 class="cta-title">Compra como invitado</h3>
            <p class="cta-desc">¡Ahorra tiempo comprando como invitado!</p>
            <form action="{{ route('comprar') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="singin-email">Email</label>
                <input type="text" class="form-control" id="singin-email" name="emailcompra" required />
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-rounded">
                  <span>Comprar como invitado</span>
                  <i class="fas fa-long-arrow-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </main>
@endsection