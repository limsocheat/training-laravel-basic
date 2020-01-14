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
                    <form method="POST" action="{{ route('dashboard.listing.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection