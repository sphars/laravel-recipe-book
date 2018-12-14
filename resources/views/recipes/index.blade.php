@extends('layouts.master')
@section('pageTitle')
Recipes
@endsection
@section('content')
    <h1 class="my-4 text-center">Recipes</h1>
    @if (isset($recipes))
    <div class="row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card my-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe->title }}</h5>
                    <p class="card-text">{{ $recipe->author }}</p>
                    <p class="card-text">
                        @foreach ($recipe->categories as $category)
                    <a href="{{ route('categories.category', ['id' => $category->id]) }}" class="btn btn-sm btn-info">{{ $category->name }}</a>
                        @endforeach
                    </p>
                    <div class="text-center mt-2 mb-0">
                        <a href="{{ route('recipes.recipe', ['id' => $recipe->id]) }}" class="btn btn-primary">View</a>
                        @if (Auth::check())
                        <a href="{{route('manage.recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-outline-danger">Edit</a>
                        @endif
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
