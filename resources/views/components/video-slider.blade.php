@extends('layouts.application')

@section('content')
<div class="swiper-container video-slider">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">@include('components._video-hero')</div>
		<div class="swiper-slide">@include('components._video-hero')</div>
		<div class="swiper-slide">@include('components._video-hero')</div>
		<div class="swiper-slide">@include('components._video-hero')</div>
		<div class="swiper-slide">@include('components._video-hero')</div>

		...
	</div>

</div>


@endsection