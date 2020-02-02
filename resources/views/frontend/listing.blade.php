@extends('frontend.layout.master')

@section('title', $listing['title'])


@section('content')

<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @for($slide = 7; $slide <= 11; $slide++ ) <div class="carousel-item {{ $slide == 7 ? 'active' : '' }}">
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
        <img src="{{ $listing['image'] }}" style="width: 500px; height: auto" />
        <h4>{{ $listing['description'] }}</h4>
        <br>

        <p>
            <strong>Videos</strong>
            <p>
                {!! $video !!}
            </p>
        </p>


        <p>
            <strong>Features</strong>
            @foreach($listing->features as $feature)
                <div class="btn btn-primary">{{ $feature->title }}</div>
            @endforeach
        </p>

        <p>
            <strong>Tags</strong>
            @foreach($listing->tags as $tag)
                <div class="btn btn-primary">{{ $tag->title }}</div>
            @endforeach
        </p>

        <strong>User: {{ $listing->user ? $listing->user->name : null }}</strong>
        <br>
        <strong>Category: {{ $listing->category ? $listing->category->title : 'N/A' }}</strong>
    </div>
</section>

@endsection