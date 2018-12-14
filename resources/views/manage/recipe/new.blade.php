@extends('layouts.master')
@section('pageTitle')
Edit Recipe
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">New Recipe</h1>
            @include('partials.errors')
            <form action="{{ route('manage.recipe.new') }}" method="post">
                <div class="form-group">
                    <label for="title">Recipe Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="categories">Categories</label><a href="{{ route('manage.category.new') }}" class="btn btn-sm btn-success ml-2"><i class="fas fa-plus mr-1"></i> Add</a>
                    <select class="form-control" id="categories" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <small><i>Place each ingredient on a new line.</i></small>
                    <textarea class="form-control" id="ingredients" name="ingredients"></textarea>
                </div>
                <div class="form-group">
                    <label for="instructions">Instructions</label>
                    <small><i>Place each instruction on a new line.</i></small>
                    <textarea class="form-control" id="instructions" name="instructions"></textarea>
                </div>
                {{ csrf_field() }}
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection
