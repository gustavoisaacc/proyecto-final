@extends('layouts.application')

@section('content')
	<h1>Video hero</h1>

	<a href="#" class="video-hero">
                    <img src="http://lorempixel.com/1024/800/?v{{ rand() }}" alt="Movie alt">


                    <div class="langs">
                        <div class="spanish">ESP</div>
                        <div class="latam">LAT</div>
                        <div class="english">ENG</div>
                    </div>

                    <div class="details">
                        <div class="button-play">
                            <i class="icon-play"></i>
                        </div>

                        <div class="video-title">
                            Cat Movie
                        </div>

                        <div class="info">
                            <div class="pegi">13+</div>
                            <div class="duration">1 h 48 min</div>
                        </div>

                        <div class="gender">
                            Suspenso
                        </div>
                    </div>
                </a><!--vide-item-->


@endsection