@extends('layouts.app')

@section('title.create', 'class=active')
@section('main-content')
    <x-page-header header="Create Title" page="title" />
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" method="POST" action="{{ route('title.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" placeholder="title" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
