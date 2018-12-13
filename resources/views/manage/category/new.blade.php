@extends('layouts.master')
@section('pageTitle')
New Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">New Category</h1>

            <form action="{{ route('manage.category.new') }}" method="post">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

@endsection
