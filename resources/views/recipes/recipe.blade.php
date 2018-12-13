@extends('layouts.master')
@section('pageTitle')
{{ $recipe->title }}
@endsection
@section('content')
    <h1 class="my-4 text-center">{{ $recipe->title }}</h1>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <img class="w-100" src="https://fakeimg.pl/700/282828/?text={{ $recipe->title }}" alt="{{ $recipe->title }}">
        </div>
        <div class="col-sm-12 col-md-9">
            <p>
                Author: {{ $recipe->author }}<br>
                Date: {{ date("m/d/Y", strtotime($recipe->created_at)) }}
            </p>
            <p>Description: {{ $recipe->description }}</p>
            <p>
                @foreach ($recipe->categories as $category)
                <a href="{{ route('categories.category', ['id'=>$category->id]) }}" class="btn btn-sm btn-info">{{ $category->name }}</a>
                @endforeach
            </p>
            <h3>Ingredients</h3>
            <ul class="list-unstyled">
                @foreach (explode("*", $recipe->ingredients) as $ingredient)
                <li>{{ $ingredient }}</li>
                @endforeach
            </ul>

            <h3>Instructions</h3>
            <ol class="list-unstyled">
                @foreach (explode("*", $recipe->instructions) as $instruction)
                <li>{{ $instruction }}</li>
                @endforeach
            </ol>

        </div>
    </div>

@endsection
