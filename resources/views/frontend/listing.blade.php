@extends('frontend.layout.master')

@section('title', $listing['title'])


@section('content')

<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($listing->galleries as $key => $gallery)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset($gallery->url) }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
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

        <p>
            <strong>Working Hours</strong>
            @foreach($listing->working_hours as $working_hour)
                <div class="btn btn-primary">{{ $working_hour->day }}</div>
            @endforeach
        </p>

        <strong>User: {{ $listing->user ? $listing->user->name : null }}</strong>
        <br>
        <strong>
            Customer: 
            <div class="btn btn-primary">{{ $listing->customer ? $listing->customer->name : null }}</div>
            <div class="btn btn-primary">{{ $listing->customer && $listing->customer->contact ? $listing->customer->contact->contact : null }}</div>
        </strong>
        <br>
        <strong>Category: {{ $listing->category ? $listing->category->title : 'N/A' }}</strong>
    </div>
</section>

@endsection