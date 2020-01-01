@extends('frontend.layout.master')

@section('content')

<div class="container">
    <h2 class="text-center mt-4">Feature Article</h2>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-4">
                <div class="card text-white">
                    <img src="{{ $category['image'] }}" class="card-img">
                    <div class="card-img-overlay">
                        <h3 class="card-title">{{ $category['title'] }}</h3>
                        <p class="card-text">{{ $category['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection