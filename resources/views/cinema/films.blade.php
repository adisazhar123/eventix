@extends('layouts.main_cinema')

@section('title', "Now playing")

@section('style')
<link href="{{asset('assets/css/movie.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('header')
  <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Now Playing Films</span> - These are the list of films!
    <a class="btn btn-primary" href="{{url('xxi/new/film')}}" role="button" style="float: right">New Film</a>
  </h4>
@endsection

@section('content')
<div class="container">
	@foreach ($films as $film)
	<div class="movie-card">
		<div class="movie-header manOfSteel">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">{{$film->name}}</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Genre</label>
					<span>{{$film->genre}}</span>
				</div><!--date,time-->
				<div class="info-section">
					<label>Director</label>
					<span>{{$film->director}}</span>
				</div><!--row-->
				<div class="info-section">
					<label>Duration</label>
					<span>{{$film->duration}}</span>
				</div><!--screen-->
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	@endforeach
</div><!--container-->
@endsection

@section('script')
<script type="text/javascript" src="{{asset('assets/js/pages/components_modals.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#new-film").click(function(){
      $("#new-film-modal").modal('show');
    });
  });
</script>
@endsection
