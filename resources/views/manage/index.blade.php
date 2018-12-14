@extends('layouts.master')
@section('pageTitle')
Management
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Manage Laravel Recipe Book</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-around">
                <a href="{{ route('manage.category.index') }}" class="btn btn-lg btn-primary">Manage Categories</a>
                <a href="{{ route('manage.recipe.index') }}" class="btn btn-lg btn-primary">Manage Recipes</a>
            </div>
        </div>
    </div>

@endsection
