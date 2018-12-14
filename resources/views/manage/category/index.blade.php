@extends('layouts.master')
@section('pageTitle')
Category Management
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Category Management</h1>
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
                <a href="{{ route('manage.category.new') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Add New Category</a>
            </div>
            <div class="list-group mb-3">
                @foreach ($categories as $category)
                <a href="{{ route('manage.category.edit', ['id' => $category->id]) }}" class="list-group-item list-group-action">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$categories->links()}}
        </div>
    </div>

@endsection
