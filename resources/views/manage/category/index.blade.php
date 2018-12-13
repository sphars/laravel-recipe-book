@extends('layouts.master')
@section('pageTitle')
Category Management
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Category Management</h1>
            <ul class="list-unstyled">
            @foreach ($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
