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
        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
            <div class="my-3 d-flex justify-content-end">
                <a href="{{ route('manage.recipe.new') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Add New Recipe</a>
            </div>
            <div class="list-group mb-3">
                @foreach ($recipes as $recipe)
                <a href="{{ route('manage.recipe.edit', ['id' => $recipe->id]) }}" class="list-group-item list-group-action">{{ $recipe->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$recipes->links()}}
        </div>
    </div>

@endsection
