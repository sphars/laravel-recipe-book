@extends('layouts.master')
@section('pageTitle')
Recipes
@endsection
@section('content')
    <h1 class="text-center">Recipes</h1>
    @if (isset($recipes))
    <div class="row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card my-2">
                <img class="book-image card-img-top" src="https://fakeimg.pl/400/282828/?text={{ $recipe->title }}" alt="{{ $recipe->title }}">
                <div class="card-body">
                    <h5 class="card-title book-title">{{ $recipe->title }}</h5>
                    <p class="card-text book-author">{{ $recipe->author }}</p>
                    <p class="card-text book-genres">
                        @foreach ($recipe->categories as $category)
                            <a href="#" class="badge badge-secondary">{{ $category->name }}</a>
                        @endforeach
                    </p>
                    <div class="text-center my-2">
                        <a href="{{ route('recipes.recipe', ['id' => $recipe->id]) }}" class="btn btn-outline-info">View</a>
                        {{-- @if (Auth::check())
                        <a href="{{route('admin.edit', ['id' => $book->id]) }}" class="btn btn-outline-danger">Edit</a>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$recipes->links()}}
        </div>
    </div>
    @endif
@endsection
