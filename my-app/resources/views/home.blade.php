@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->check())
                        <h1>User info</h1>
                        <ul>
                            <li>ID: {{ auth()->user()->id }}</li>
                            <li>Name: {{ auth()->user()->name }}</li>
                            <li>Email: {{ auth()->user()->email }}</li>
                        </ul>
                        <a href="/">Back</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>@endsection
