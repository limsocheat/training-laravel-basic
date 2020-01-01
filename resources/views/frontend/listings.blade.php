@extends('frontend.layout.master')

@section('title')
    Listings Page
@endsection

@section('content')

<section class="parallax-section" style="background-image: url('http://citybook.kwst.net/images/bg/8.jpg')">
    
    <div class="container text-center text-white py-5">    
        <h1 class="py-5">Listings Section</h1>
    </div>

</section>
<div class="container">
<h2 class="py-3">Listings Item </h2>
    @if(count($listings) > 0)
        <div class="row row-cols-1 row-cols-md-3">
            @foreach($listings as $listing)
                <div class="col mb-4">
                    <a href="{{ route('app.listing', ['id' => $listing['id']]) }}">
                        <div class="card">
                            <img src="{{ $listing['image'] }}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $listing['title'] }}</h5>
                                <p class="card-text">{{ $listing['description'] }}</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $listing['address'] ? $listing['address'] : 'N/A' }}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @else

    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger w-100" role="alert">
                Sorry! no data found!
            </div>
        </div>
    </div>

    @endif
    <div class="row" style="text-align: center">
        <div class="col-12 d-flex justify-content-center">
            {{ $listings->links() }}
        </div>
    </div>
</div>

@endsection