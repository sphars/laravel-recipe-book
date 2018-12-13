@extends('layouts.master')
@section('pageTitle')
Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Edit Category</h1>
            <h2 class="text-center">{{ $category->name }}</h2>
        </div>
    </div>

@endsection
