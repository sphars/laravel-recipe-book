@extends('layouts.master')
@section('pageTitle')
{{ $category->name }} Recipes
@endsection
@section('content')
    <h1 class="my-4 text-center">{{ $category->name }} Recipes</h1>
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                @foreach ($category->recipes as $recipe)
                <li><a href="{{ route('recipes.recipe', ['id' => $recipe->id]) }}" class="">{{ $recipe->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
