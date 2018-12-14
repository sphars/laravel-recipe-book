@extends('layouts.master')
@section('pageTitle')
Recipe Management
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Recipe Management</h1>
        </div>
    </div>
    @if (Session::has('info'))
    <div class="row">
        <div class="col">
            <div class="alert alert-info alert-dismissable fade show" role="alert">
                {{ Session::get('info') }}
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="my-3">
                <a href="{{ route('manage.recipe.new') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Add New Recipe</a>
            </div>
            <ul class="list-unstyled">
            @foreach ($recipes as $recipe)
                <li><a href="{{ route('manage.recipe.edit', ['id' => $recipe->id]) }}">{{ $recipe->title }}</a></li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
