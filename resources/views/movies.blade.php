@extends('layouts.main_landing')

@section('title','Movies list')

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
							<div class="sidebar_title">Genre</div>
							<ul class="sidebar_categories">
								<li><a href="{{url('search/movies/Action')}}">Action</a></li>
								<li><a href="{{url('search/movies/Adventure')}}">Adventure</a></li>
								<li><a href="{{url('search/movies/Animation')}}">Animation</a></li>
								<li><a href="{{url('search/movies/Biography')}}">Biography</a></li>
								<li><a href="{{url('search/movies/Comedy')}}">Comedy</a></li>
								<li><a href="{{url('search/movies/Crime')}}">Crime</a></li>
								<li><a href="{{url('search/movies/Documentary')}}">Documentary</a></li>
								<li><a href="{{url('search/movies/Drama')}}">Drama</a></li>
								<li><a href="{{url('search/movies/Family')}}">Family</a></li>
								<li><a href="{{url('search/movies/Fantasy')}}">Fantasy</a></li>
								<li><a href="{{url('search/movies/History')}}">History</a></li>
								<li><a href="{{url('search/movies/Horror')}}">Horror</a></li>
								<li><a href="{{url('search/movies/Music')}}">Music</a></li>
								<li><a href="{{url('search/movies/Musical')}}">Musical</a></li>
								<li><a href="{{url('search/movies/Mystery')}}">Mystery</a></li>
								<li><a href="{{url('search/movies/Romance')}}">Romance</a></li>
								<li><a href="{{url('search/movies/Short')}}">Short</a></li>
								<li><a href="{{url('search/movies/Sport')}}">Sport</a></li>
								<li><a href="{{url('search/movies/Superhero')}}">Superhero</a></li>
								<li><a href="{{url('search/movies/Thriller')}}">Thriller</a></li>
								<li><a href="{{url('search/movies/War')}}">War</a></li>
								<li><a href="{{url('search/movies/Western')}}">Western</a></li>
							</ul>
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
								$name = str_replace(' ', '', $film->name);
								$name = preg_replace("/[^A-Za-z0-9 ]/", '', $name);
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
											<a href="{{url('movies/'.$film->id.'/'.$name) }}">
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
