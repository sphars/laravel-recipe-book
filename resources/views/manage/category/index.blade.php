@extends('layouts.master')
@section('pageTitle')
Category Management
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Category Management</h1>
            <div class="my-3">
                <a href="{{ route('manage.category.new') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Add New Category</a>
            </div>
            <ul class="list-unstyled">
            @foreach ($categories as $category)
                <li><a href="{{ route('manage.category.edit', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
