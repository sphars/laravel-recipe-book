@extends('layouts.master')
@section('pageTitle')
{{ $recipe->title }}
@endsection
@section('content')
    <h1 class="text-center">{{ $recipe->title }}</h1>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <img class="book-image" src="https://fakeimg.pl/400/282828/?text={{ $recipe->title }}" alt="{{ $recipe->title }}">
        </div>
        <div class="col-sm-12 col-md-9">
            <p>Author: {{ $recipe->author }}</p>
            <p>Description: {{ $recipe->description }}</p>
            <p>
                @foreach ($recipe->categories as $category)
                    <a href="#" class="badge badge-secondary">{{ $category->name }}</a>
                @endforeach
            </p>
        </div>
    </div>

@endsection
