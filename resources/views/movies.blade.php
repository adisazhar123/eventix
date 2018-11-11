@extends('layouts.main_landing')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/shop_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/shop_responsive.css')}}">
	<link href="{{asset('assets/css/movie.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="super_container">
	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
								<li><a href="#">Gadgets</a></li>
								<li><a href="#">Car Electronics</a></li>
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-9">

					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{$films->count()}}</span> Films found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
									</li>
								</ul>
							</div>
						</div>


							<div class="product_grid_border"></div>
							<div class="containers">
								@foreach ($films as $film)
								@php
								$file=explode("/",$film->picture->location);
								$url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
								$name = str_replace(' ', '_', $film->name);
								$name = preg_replace($url, '<a href="$1">$1</a>', $name);
								@endphp

								<div class="movie-card">
									<div class="movie-header" style="background: url({{ asset('storage/'.$file[1].'/'.$file[2]) }}); background-size: cover;">
										<div class="header-icon-container">
											<a href="{{url('movies/'.$film->id.'/'.$name) }}">
												<i class="material-icons header-icon">&nbsp;<i class="fas fa-play"></i></i>
											</a>
										</div>
									</div><!--movie-header-->
									<div class="movie-content">
										<div class="movie-content-header">
											<a href="#">
												<h3 class="movie-title text-capitalize">{{$film->name}}</h3>
											</a>
											<div class="imax-logo"></div>
										</div>
										<div class="movie-info">
											<div class="info-section">
												<label>Genre</label>
												<span>{{$film->genre}}</span>
											</div>
											<div class="info-section">
												<label>Director</label>
												<span>{{$film->director}}</span>
											</div>
											<div class="info-section">
												<label>Duration</label>
												<span>{{$film->duration}}</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
	<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
	<script src="{{asset('js/shop_custom.js')}}"></script>
@endsection
