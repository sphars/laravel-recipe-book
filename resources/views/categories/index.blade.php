@extends('layouts.master')
@section('pageTitle')
Categories
@endsection
@section('content')
    <h1 class="my-4 text-center">Categories</h1>
    @if (isset($categories))
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
            <div class="list-group mb-3">
            @foreach ($categories as $category)
            <a href="{{ route('categories.category', ['id' => $category->id]) }}" class="list-group-item list-group-action">{{ $category->name }}</a>
            @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$categories->links()}}
        </div>
    </div>
    @endif
@endsection
