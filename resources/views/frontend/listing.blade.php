@extends('frontend.layout.master')

@section('title', $listing['title'])


@section('content')

<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @for($slide = 7; $slide <= 11; $slide++ )
                <div class="carousel-item {{ $slide == 7 ? 'active' : '' }}">
                    <img src="{{ asset('/img/slides/'.$slide.'.jpg') }}" class="d-block w-100" alt="...">
                </div>
            @endfor
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <div class="container">
        <h1>{{ $listing['title'] }}</h1>
        <img src="{{ $listing['image'] }}" style="width: 500px; height: auto"/>
        <h4>{{ $listing['description'] }}</h4>
    </div>
</section>

@endsection