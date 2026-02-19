@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 mb-3">Welcome to {{ config('app.name', 'Laravel') }}</h1>
                    <p class="text-muted mb-4">
                        He who has a why to live can bear almost any how.
                    </p>

                    @guest
                        <div class="d-flex gap-2">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                            @endif
                        </div>
                    @else
                        <a href="{{ route('home') }}" class="btn btn-primary">Go to Dashboard</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
