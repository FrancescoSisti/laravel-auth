@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    <h1 class="text-center mb-4">Welcome to {{ config('app.name', 'Laravel') }}</h1>

                    <p class="text-center">
                        A portfolio and project management system built with Laravel.
                    </p>

                    @guest
                        <div class="text-center mt-4">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                            @endif
                        </div>
                    @else
                        <div class="text-center mt-4">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
