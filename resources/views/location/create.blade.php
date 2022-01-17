@extends('layouts.app')

@section('location.create', 'class=active')
@section('main-content')
    <x-page-header header="Create Location" page="location" />
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" method="POST" action="{{ route('location.store') }}">
                @csrf
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" placeholder="location" id="location" name="location" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
