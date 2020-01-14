@extends('frontend.layout.master')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome {{ Auth::user() ? Auth::user()->email : null }}</h2>
            </div>
            <div class="col-md-12" style="margin-top: 150px;">
                <div class="row">
                    <div class="col-md-4">
                        @include('@include.sidebar')
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection