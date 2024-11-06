@extends('layouts.admin')

@section('admin-content')
<h2 class="fs-4 text-secondary my-4">
    {{ __('Dashboard') }}
</h2>
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">{{ __('Admin Panel') }}</div>
            <div class="card-body">
                {{ __('Welcome') }} {{ Auth::user()->name }}!
            </div>
        </div>
    </div>
</div>
@endsection
