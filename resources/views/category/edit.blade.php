@extends('layouts.app')

@section('main-content')
@section('category.edit', 'class=active')
<x-page-header header="Edit Category" page="category" />
<div class="card">
    <div class="card-body">
        <form class="col-md-4 mx-auto" action="{{ route('category.update',$category->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" placeholder="category" id="category" name="category" required value="{{$category->category}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
