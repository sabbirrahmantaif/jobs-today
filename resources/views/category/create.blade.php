@extends('layouts.app')

@section('category.create', 'class=active')
@section('main-content')
    <x-page-header header="Create Category" page="category" />
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" placeholder="category" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
