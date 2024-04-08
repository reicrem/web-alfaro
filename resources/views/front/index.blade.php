@extends('layouts.app')

@section('content')
  
<main class="main">
  <div class="intro-section">
    <div class="intro-section-slider">
      <div class="container">
        <div class="intro-slider-container slider-container-ratio mb-0">
          <div
            class="intro-slider owl-carousel owl-simple owl-light"
            data-toggle="owl"
            data-owl-options='{
                              "nav": false, 
                              "dots": true,
                              "autoplay":true,
                              "autoplayTimeout":5000,
                              "autoplayHoverPause":true,
                              "responsive": {
                                  "1200": {
                                      "nav": true,
                                      "dots": false
                                  }
                              }
                          }'
          >
            <div class="intro-slide">
              <figure class="slide-image">
                <picture>
                  <source media="(max-width: 480px)" srcset="{{ asset('images/slide-1.jpg') }}" />
                  <img src="{{ asset('images/slide-1.jpg') }}" />
                </picture>
              </figure>
              
              <div class="intro-content">
                <h3 class="intro-subtitle"></h3>
                <h1 class="intro-title text-white"><br /></h1>
                <div class="intro-text text-white"></div>
                <a href="category.html" class="btn btn-primary">
                  <span>Ver</span>
                </a>
              </div>
            </div>
            <div class="intro-slide">
              <figure class="slide-image">
                <picture>
                  <source media="(max-width: 480px)" srcset="{{ asset('images/slide-2.jpg') }}" />
                  <img src="{{ asset('images/slide-2.jpg') }}" />
                </picture>
              </figure>
              <div class="intro-content">
                <h3 class="intro-subtitle"></h3>
                <h1 class="intro-title text-white"><br /></h1>
                <a href="category.html" class="btn btn-primary">
                  <span>Ver</span>
                </a>
              </div>
            </div>
            <div class="intro-slide">
              <figure class="slide-image">
                <picture>
                  <source media="(max-width: 480px)" srcset="{{ asset('images/slide-1.jpg') }}" />
                  <img src="{{ asset('images/slide-1.jpg') }}"/>
                </picture>
              </figure>
              <div class="intro-content">
                <h3 class="intro-subtitle"></h3>
                <h1 class="intro-title text-white"></h1>
                <div class="intro-text text-white"></div>
                <a href="category.html" class="btn btn-primary">
                  <span>Ver</span>
                </a>
              </div>
            </div>
          </div>
          <span class="slider-loader"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container featured mt-4 pb-2">
    <div class="heading heading-flex mb-3">
      <div class="heading-left">
        <h2 class="title">Destacados</h2>
      </div>
      <div class="heading-right"></div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="banner banner-overlay product-banner">
          <a href="#">
            <img src="assets/images/demos/demo-9/banners/banner-5.jpg" alt="banner image" />
          </a>
          <div class="banner-content">
            <div class="banner-top">
              <div class="banner-title text-white text-center">
                <i class="la la-star-o"></i>
                <h3 class="text-white">Our Experts<br />Recommend</h3>
              </div>
            </div>
            <div class="banner-bottom">
              <div class="product-cat">
                <h4 class="text-white">Sale</h4>
              </div>
              <div class="product-price">
                <h4 class="text-white">$29.99</h4>
              </div>
              <div class="product-txt">
                <p class="text-white">Wedge-heel sandals</p>
              </div>
              <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="tab-content tab-content-carousel">
          <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
            <div
              class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
              data-toggle="owl"
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
                                }'
            >
              <div class="product product-7">
                <figure class="product-media">
                  <span class="product-label label-sale">30% off</span>
                  <a href="product.html">
                    <img src="assets/images/demos/demo-9/products/product-5-1.jpg" alt="Product image" class="product-image" />
                    <img src="assets/images/demos/demo-9/products/product-5-2.jpg" alt="Product image" class="product-image-hover" />
                  </a>
                  <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                  </div>
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  </div>
                </figure>
                
                <div class="product-body">
                  <h3 class="product-title"><a href="product.html">Trainers</a></h3>
                  <div class="product-price">
                    <span class="new-price">Now $19.99</span>
                    <span class="old-price">Was $29.99</span>
                  </div>
                  <div class="ratings-container">
                    <div class="ratings">
                      <div class="ratings-val" style="width: 100%"></div>
                    </div>
                    <span class="ratings-text">( 6 Reviews )</span>
                  </div>
                </div>
              </div>
              <div class="product product-7">
                <figure class="product-media">
                  <a href="product.html">
                    <img src="assets/images/demos/demo-9/products/product-6-1.jpg" alt="Product image" class="product-image" />
                    <img src="assets/images/demos/demo-9/products/product-6-2.jpg" alt="Product image" class="product-image-hover" />
                  </a>
                  <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                  </div>
                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  </div>
                </figure>
                <div class="product-body">
                  <h3 class="product-title"><a href="product.html">Sandals</a></h3>
                  <div class="product-price">$12.99</div>
                  <div class="ratings-container">
                    <div class="ratings">
                      <div class="ratings-val" style="width: 60%"></div>
                    </div>
                    <span class="ratings-text">( 4 Reviews )</span>
                  </div>
                </div>
              </div>

              <div class="product product-7">
                <figure class="product-media">
                  <a href="product.html">
                    <img src="assets/images/demos/demo-9/products/product-7-1.jpg" alt="Product image" class="product-image" />
                    <img src="assets/images/demos/demo-9/products/product-7-2.jpg" alt="Product image" class="product-image-hover" />
                  </a>

                  <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                  </div>
                  <!-- End .product-action-vertical -->

                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  </div>
                  <!-- End .product-action -->
                </figure>
                <!-- End .product-media -->

                <div class="product-body">
                  <h3 class="product-title"><a href="product.html">Loafers</a></h3>
                  <!-- End .product-title -->
                  <div class="product-price">$9.99</div>
                  <!-- End .product-price -->
                  <div class="ratings-container">
                    <div class="ratings">
                      <div class="ratings-val" style="width: 80%"></div>
                      <!-- End .ratings-val -->
                    </div>
                    <!-- End .ratings -->
                    <span class="ratings-text">( 2 Reviews )</span>
                  </div>
                  <!-- End .rating-container -->
                </div>
                <!-- End .product-body -->
              </div>
              <!-- End .product -->

              <div class="product product-7">
                <figure class="product-media">
                  <span class="product-label label-sale">30% off</span>
                  <a href="product.html">
                    <img src="assets/images/demos/demo-9/products/product-5-1.jpg" alt="Product image" class="product-image" />
                    <img src="assets/images/demos/demo-9/products/product-5-2.jpg" alt="Product image" class="product-image-hover" />
                  </a>

                  <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                  </div>
                  <!-- End .product-action-vertical -->

                  <div class="product-action">
                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  </div>
                  <!-- End .product-action -->
                </figure>
                <!-- End .product-media -->

                <div class="product-body">
                  <h3 class="product-title"><a href="product.html">Trainers</a></h3>
                  <!-- End .product-title -->
                  <div class="product-price">
                    <span class="new-price">Now $19.99</span>
                    <span class="old-price">Was $29.99</span>
                  </div>
                  <!-- End .product-price -->
                  <div class="ratings-container">
                    <div class="ratings">
                      <div class="ratings-val" style="width: 100%"></div>
                      <!-- End .ratings-val -->
                    </div>
                    <!-- End .ratings -->
                    <span class="ratings-text">( 6 Reviews )</span>
                  </div>
                  <!-- End .rating-container -->
                </div>
                <!-- End .product-body -->
              </div>
              <!-- End .product -->
            </div>
            <!-- End .owl-carousel -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-3 pb-3">
    <div class="container">
      <div class="banner-group">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="banner banner-overlay banner-lg">
              <a href="#">
                <img src="assets/images/demos/demo-9/banners/banner-1.jpg" alt="Banner" />
              </a>

              <div class="banner-content banner-content-bottom">
                <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                <!-- End .banner-subtitle -->
                <h3 class="banner-title text-white"><a href="#">Waterproof</a></h3>
                <!-- End .banner-title -->
                <div class="banner-text text-white"><a href="#">from $19.00</a></div>
                <!-- End .banner-text -->
                <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
              </div>
              <!-- End .banner-content -->
            </div>
            <!-- End .banner -->
          </div>
          <!-- End .col-lg-4 -->

          <div class="col-sm-6 col-lg-4 order-lg-last">
            <div class="banner banner-overlay banner-lg">
              <a href="#">
                <img src="assets/images/demos/demo-9/banners/banner-4.jpg" alt="Banner" />
              </a>

              <div class="banner-content banner-content-top">
                <h4 class="banner-subtitle text-white"><a href="#">On Sale</a></h4>
                <!-- End .banner-subtitle -->
                <h3 class="banner-title text-white">
                  <a href="#">Women's<br />Sportswear</a>
                </h3>
                <!-- End .banner-title -->
                <div class="banner-text text-white"><a href="#">from $39.00</a></div>
                <!-- End .banner-text -->
                <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
              </div>
              <!-- End .banner-content -->
            </div>
            <!-- End .banner -->
          </div>
          <!-- End .col-lg-4 -->

          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-sm-6 col-lg-12">
                <div class="banner banner-overlay">
                  <a href="#">
                    <img src="assets/images/demos/demo-9/banners/banner-2.jpg" alt="Banner" />
                  </a>

                  <div class="banner-content">
                    <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4>
                    <!-- End .banner-subtitle -->
                    <h3 class="banner-title text-white">
                      <a href="#">Accessories<br />and Shoes</a>
                    </h3>
                    <!-- End .banner-title -->
                    <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                  </div>
                  <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
              </div>
              <!-- End .col-sm-6 col-lg-12 -->

              <div class="col-sm-6 col-lg-12">
                <div class="banner banner-overlay">
                  <a href="#">
                    <img src="assets/images/demos/demo-9/banners/banner-3.jpg" alt="Banner" />
                  </a>

                  <div class="banner-content">
                    <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4>
                    <!-- End .banner-subtitle -->
                    <h3 class="banner-title text-white"><a href="#">Spring 2019</a></h3>
                    <!-- End .banner-title -->
                    <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                  </div>
                  <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
              </div>
              <!-- End .col-sm-6 col-lg-12 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .banner-group -->
    </div>
  </div>

  <div class="bg-lighter pt-6">
    <div class="container">
      <div class="heading heading-flex mb-3">
        <div class="heading-left">
          <h2 class="title">Trending Now</h2>
        </div>
        <div class="heading-right"></div>
      </div>

      <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="trending-women-tab" role="tabpanel" aria-labelledby="trending-women-link">
          <div
            class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
            data-toggle="owl"
            data-owl-options='{
                              "nav": false, 
                              "dots": true,
                              "margin": 20,
                              "loop": false,
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
                                      "items":4
                                  },
                                  "1200": {
                                      "items":4,
                                      "dots": false
                                  }
                              }
                          }'
          >
            <div class="product product-7 text-center">
              <figure class="product-media">
                <a href="product.html">
                  <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image" class="product-image" />
                  <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                </div>
                <!-- End .product-action-vertical -->

                <div class="product-action">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <h3 class="product-title"><a href="product.html">Denim jacket</a></h3>
                <!-- End .product-title -->
                <div class="product-price">$19.99</div>
                <!-- End .product-price -->

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 100%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 6 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-thumbs">
                  <a href="#" class="active">
                    <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc" />
                  </a>
                  <a href="#">
                    <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc" />
                  </a>
                  <a href="#">
                    <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc" />
                  </a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->

            <div class="product product-7 text-center">
              <figure class="product-media">
                <a href="product.html">
                  <img src="assets/images/demos/demo-9/products/product-2-1.jpg" alt="Product image" class="product-image" />
                  <img src="assets/images/demos/demo-9/products/product-2-2.jpg" alt="Product image" class="product-image-hover" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                </div>
                <!-- End .product-action-vertical -->

                <div class="product-action">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <h3 class="product-title"><a href="product.html">Sandals</a></h3>
                <!-- End .product-title -->
                <div class="product-price">$24.99</div>
                <!-- End .product-price -->

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 60%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 2 Reviews )</span>
                </div>
                <!-- End .rating-container -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->

            <div class="product product-7 text-center">
              <figure class="product-media">
                <span class="product-label label-sale">sale</span>
                <a href="product.html">
                  <img src="assets/images/demos/demo-9/products/product-3-1.jpg" alt="Product image" class="product-image" />
                  <img src="assets/images/demos/demo-9/products/product-3-2.jpg" alt="Product image" class="product-image-hover" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                </div>
                <!-- End .product-action-vertical -->

                <div class="product-action">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3>
                <!-- End .product-title -->
                <div class="product-price">
                  <span class="new-price">Now $7.99</span>
                  <span class="old-price">Was $12.99</span>
                </div>
                <!-- End .product-price -->

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 60%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 3 Reviews )</span>
                </div>
                <!-- End .rating-container -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->

            <div class="product product-7 text-center">
              <figure class="product-media">
                <a href="product.html">
                  <img src="assets/images/demos/demo-9/products/product-4-1.jpg" alt="Product image" class="product-image" />
                  <img src="assets/images/demos/demo-9/products/product-4-2.jpg" alt="Product image" class="product-image-hover" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                </div>
                <!-- End .product-action-vertical -->

                <div class="product-action">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3>
                <!-- End .product-title -->
                <div class="product-price">$17.99</div>
                <!-- End .product-price -->

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 80%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 2 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-thumbs">
                  <a href="#" class="active">
                    <img src="assets/images/demos/demo-9/products/product-4-thumb.jpg" alt="product desc" />
                  </a>
                  <a href="#">
                    <img src="assets/images/demos/demo-9/products/product-4-2-thumb.jpg" alt="product desc" />
                  </a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->

            <div class="product product-7 text-center">
              <figure class="product-media">
                <a href="product.html">
                  <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image" class="product-image" />
                  <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image" class="product-image-hover" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                </div>
                <!-- End .product-action-vertical -->

                <div class="product-action">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <h3 class="product-title"><a href="product.html">Denim jacket</a></h3>
                <!-- End .product-title -->
                <div class="product-price">$19.99</div>
                <!-- End .product-price -->

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 100%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 6 Reviews )</span>
                </div>
                <!-- End .rating-container -->
                <div class="product-nav product-nav-thumbs">
                  <a href="#" class="active">
                    <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg" alt="product desc" />
                  </a>
                  <a href="#">
                    <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg" alt="product desc" />
                  </a>
                  <a href="#">
                    <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg" alt="product desc" />
                  </a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .owl-carousel -->
        </div>
      </div>
    </div>
  </div>
</main>
@endsection