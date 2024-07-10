@extends('layouts.app')

@section('content')
  <main class="main">

    <div class="mb-3"></div>

    <div class="cta cta-separator mb-5">
      <div class="row place-content-center">
       
        <div class="col-lg-6">
          <div class="cta-wrapper text-center">
            <h3 class="cta-title">Compra ahora</h3>
            <p class="cta-desc">¡Coloca tu Email para continuar!</p>
            <form action="{{ route('comprar') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="singin-email">Email</label>
                <input type="text" class="form-control" id="singin-email" name="emailcompra" required />
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-rounded ">
                  <span >Continuar </span>
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