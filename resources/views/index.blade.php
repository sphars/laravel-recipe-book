@extends('layouts.master')
@section('pageTitle')
Laravel Recipe Book
@endsection
@section('content')
    <h1 class="my-4 text-center">Welcome to the Laravel Recipe Book!</h1>
    <p>
    Here's a random recipe to try: <a href="{{ route('recipes.recipe', ['id' => $recipe->id]) }}">{{ $recipe->title }}</a>
    </p>
@endsection
