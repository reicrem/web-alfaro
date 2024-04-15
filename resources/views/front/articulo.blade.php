@foreach ($articulos as $articulo)
  <div class="container quickView-container">
    <div class="quickView-content">
      <div class="row">
        <div class="col-lg-7 col-md-6">
          <div class="row">
            <div class="product-left">
              <a href="#one" class="carousel-dot active">
                <img src="https://kallfu.eppseguridadmym.com/{{ $articulo->imagen1 }}">
              </a>
            </div>
            <div class="product-right">
              <div class="owl-carousel owl-theme owl-nav-inside owl-light mb-0" data-toggle="owl"
                data-owl-options='{
                                      "dots": false,
                                      "nav": false, 
                                      "URLhashListener": true,
                                      "responsive": {
                                          "900": {
                                              "nav": true,
                                              "dots": true
                                          }
                                      }
                                  }'>
                <div class="intro-slide" data-hash="one">
                  <img src="https://kallfu.eppseguridadmym.com/{{ $articulo->imagen1 }}" alt="Image Desc">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <h2 class="product-title">{{ $articulo->articulo }}</h2>
          <h3 class="product-price">$ {{ $articulo->price }}</h3>
          <p class="product-txt">Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.</p>
          <div class="details-filter-row product-nav product-nav-thumbs">
            <label for="size">color:</label>
            <a href="#" class="active">
              <img src="" alt="product desc">
            </a>
            <a href="#">
              <img src="" alt="product desc">
            </a>
          </div><!-- End .product-nav -->

          <div class="details-filter-row details-row-size">
            <label for="size">Size:</label>
            <div class="select-custom">
              <select name="size" id="size" class="form-control">
                <option value="#" selected="selected">Select a size</option>
                <option value="s">Small</option>
                <option value="m">Medium</option>
                <option value="l">Large</option>
                <option value="xl">Extra Large</option>
              </select>
            </div>
          </div>
          <div class="product-details-action">
            <form action="{{ route('add') }}" method="POST" id="f_prod">
              @csrf
              <input type="hidden" name="id" value="{{ $articulo->id }}">
              <button class="btn btn-product btn-cart"></button>
            </form>
          </div>
          <div class="product-details-footer">
            <div class="product-cat">
              <span>Categoria:</span>
              <a href="#">{{ $articulo->catego }}</a>,
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
