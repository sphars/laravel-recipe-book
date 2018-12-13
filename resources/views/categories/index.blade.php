@extends('layouts.master')
@section('pageTitle')
Categories
@endsection
@section('content')
    <h1 class="my-4 text-center">Categories</h1>
    @if (isset($categories))
    <div class="row">
        <div class="col">
            @foreach ($categories as $category)

            <a href="{{ route('categories.category', ['id' => $category->id]) }}" class="btn btn-sm btn-info">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    @endif
@endsection
