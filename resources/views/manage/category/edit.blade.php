@extends('layouts.master')
@section('pageTitle')
Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Edit Category</h1>
            {{-- @include('partials.errors') --}}
            <form action="{{ route('manage.category.update') }}" method="post">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category['name'] }}">
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $categoryId }}">
                <a href="{{ route('manage.category.delete', ['id' => $category->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Delete</a>
            </form>
        </div>
    </div>

@endsection
