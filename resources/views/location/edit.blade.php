@extends('layouts.app')

@section('main-content')
@section('location.edit', 'class=active')
<x-page-header header="Edit Location" page="location" />
<div class="card">
    <div class="card-body">
        <form class="col-md-4 mx-auto" action="{{ route('location.update',$location->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" placeholder="location" id="location" name="location" required value="{{$location->location}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
