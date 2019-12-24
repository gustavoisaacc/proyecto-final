@extends('layouts.application')

@section('content')
    <style>
        .flex-6{
            display: flex;
            flex-wrap: wrap;
        }

        .flex-6 .col{
            padding: 1rem;
            width: 16.6666667%;
        }
    </style>
    <h1>Componente video</h1>
    <div class="flex-6">
        @foreach([1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1] as $video)
            <div class="col">
                <a href="#" class="video-item">
                    <img src="http://lorempixel.com/400/600/?v{{ rand() }}" alt="Movie alt">


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
            </div><!--col-->
        @endforeach
    </div>
@endsection