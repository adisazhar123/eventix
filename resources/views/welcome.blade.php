@extends('layouts.main_landing')

@section('title','The best place to get tickets!')

@section('style')
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
@endsection

@section('content')
  <div class="banner">
    <div class="banner_background" style="background-image:url({{('images/concert.jpg')}})"></div>
    <div class="container fill_height">
      <div class="row fill_height">
        <div class="banner_product_image">
{{--           <img src="{{('images/banner_product.png')}}" alt=""> --}}
        </div>
        <div class="col-lg-6 offset-lg-3 fill_height">
          <div class="banner_content">
            <h1 class="banner_text">The best place to get tickets</h1>
            <div><br><br></div>
            <div class="d-none d-sm-block"><br><br><br></div>
{{--             <div class="banner_price"><span>$530</span>$460</div>
            <div class="banner_product_name">Cinema, Events, Sports</div> --}}
            <div class="button banner_button"><a href="#categories">Get My Tickets</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Characteristics -->

  <div class="characteristics" id="categories">
    <div class="container">
      <div class="row justify-content-center">

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col d-none d-sm-block">
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_content">
              <div class="char_title">Categories</div>
              <div class="char_subtitle">Grab your tickets</div>
            </div>
          </div>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col" style="cursor: pointer;">
          <a href="{{url('movies')}}">
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{('images/categories_cinema.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Cinema</div>
              <div class="char_subtitle">Movies ..</div>
            </div>
          </div>
          </a>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col" style="cursor: pointer;">
          <a href="{{url('events')}}">
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{('images/categories_events.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Events</div>
              <div class="char_subtitle">Seminars, Talk Show ..</div>
            </div>
          </div>
          </a>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col" style="cursor: pointer;">
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{('images/categories_sports.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Sports</div>
              <div class="char_subtitle">Football, Basketball ..</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Deals of the week -->

  <div class="deals_featured">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
          <!-- Deals -->
          <div class="deals">
            <div class="deals_title">Deals of the Month</div>
            <div class="deals_slider_container">
              <!-- Deals Slider -->
              <div class="owl-carousel owl-theme deals_slider">

                <!-- Deals Item -->
                <div class="owl-item deals_item">
                  <div class="deals_image"><img src="{{asset('images/deals.png')}}" alt=""></div>
                  <div class="deals_content">
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_category"><a href="#">Headphones</a></div>
                      <div class="deals_item_price_a ml-auto">$300</div>
                    </div>
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_name">Beoplay H7</div>
                      <div class="deals_item_price ml-auto">$225</div>
                    </div>
                    <div class="available">
                      <div class="available_line d-flex flex-row justify-content-start">
                        <div class="available_title">Available: <span>6</span></div>
                        <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                      </div>
                      <div class="available_bar"><span style="width:17%"></span></div>
                    </div>
                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                      <div class="deals_timer_title_container">
                        <div class="deals_timer_title">Hurry Up</div>
                        <div class="deals_timer_subtitle">Offer ends in:</div>
                      </div>
                      <div class="deals_timer_content ml-auto">
                        <div class="deals_timer_box clearfix" data-target-time="">
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                            <span>hours</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                            <span>mins</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                            <span>secs</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="deals_slider_nav_container">
              <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
              <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
            </div>
          </div>

          <!-- Featured -->
          <div class="featured">
            <div class="tabbed_container">
              <div class="tabs">
                <ul class="clearfix">
                  <li class="active">This Week</li>
                  <li>Next Week</li>
                </ul>
                <div class="tabs_line"><span></span></div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel active">
                <div class="featured_slider slider">
                  @for($i = 0 ; $i < 4 ; $i++ )
                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                  @endfor
                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">
                  @for($i = 0 ; $i < 4 ; $i++ )
                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                  @endfor

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Banner -->

  <div class="banner_2">
    <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
    <div class="banner_2_container">
      <div class="banner_2_dots"></div>
      <!-- Banner 2 Slider -->

      <div class="owl-carousel owl-theme banner_2_slider">

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Hot New Arrivals -->

  <div class="new_arrivals">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="tabbed_container">
            <div class="tabs clearfix tabs-right">
              <div class="new_arrivals_title">Hot New Tickets</div>
              <ul class="clearfix">
                <li class="active">Cinemas</li>
                <li>Events</li>
                <li>Sports</li>
              </ul>
              <div class="tabs_line"><span></span></div>
            </div>
            <div class="row">
              <div class="col-lg-9" style="z-index:1;">

                <!-- Product Panel -->
                <div class="product_panel panel active">
                  <div class="arrivals_slider slider">
                  @for($i = 0 ; $i < 6 ; $i++ )
                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_7.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_8.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  @endfor()
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

                <!-- Product Panel -->
                <div class="product_panel panel">
                  <div class="arrivals_slider slider">
                  @for($i = 0 ; $i < 6 ; $i++ )
                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_7.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_8.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  @endfor()
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

                <!-- Product Panel -->
                <div class="product_panel panel">
                  <div class="arrivals_slider slider">
                  @for($i = 0 ; $i < 6 ; $i++ )
                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_7.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/new_8.jpg')}}" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  @endfor()
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

              </div>

              <div class="col-lg-3">
                <div class="arrivals_single clearfix">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="arrivals_single_image"><img src="{{asset('images/new_single.png')}}" alt=""></div>
                    <div class="arrivals_single_content">
                      <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                      <div class="arrivals_single_name_container clearfix">
                        <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                        <div class="arrivals_single_price text-right">$379</div>
                      </div>
                      <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                      <form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
                    </div>
                    <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                    <ul class="arrivals_single_marks product_marks">
                      <li class="arrivals_single_mark product_mark product_new">new</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Trends -->

  <div class="trends">
    <div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
    <div class="trends_overlay"></div>
    <div class="container">
      <div class="row">

        <!-- Trends Content -->
        <div class="col-lg-3">
          <div class="trends_container">
            <h2 class="trends_title">On air&nbsp;<i style="color: #E25822" class="fas fa-fire"></i></h2>
            <div class="trends_text"><p>Your must watch films !</p></div>
            <div class="trends_slider_nav">
              <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
              <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
            </div>
          </div>
        </div>

        <!-- Trends Slider -->
        <div class="col-lg-9">
          <div class="trends_slider_container">


            <div class="owl-carousel owl-theme trends_slider">
              @foreach($films as $film)
              @php
                $file=explode("/",$film->picture->location);
              @endphp
              <div class="owl-item">
                <div class="trends_item is_new">
                  <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('storage/'.$file[1].'/'.$file[2]) }}" alt="" style="object-fit: cover;"></div>
                  <div class="trends_content">
                    <div class="trends_category"><a href="" style="cursor: default;" class="text-capitalize">By :&nbsp;{{$film->director}}</a></div>
                    <div class="trends_info clearfix">
{{--                       <div class="trends_name"><a href="#">{{$film->name}}</a></div> --}}
                      <div class="trends_price"><a href="{{url('movies')}}"><i class="fab fa-youtube"></i> Get ticket</a></div>
                    </div>
                  </div>
                  <ul class="trends_marks">
                    <li class="trends_mark trends_discount">-25%</li>
                    <li class="trends_mark trends_new">new</li>
                  </ul>
                  <div class="trends_fav"><i class="fas fa-heart"></i></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script type="text/javascript">
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
  </script>
@endsection
