@extends('layouts.app')
@section('main-content')
@section('create-location', 'class=active')
<form class="col-md-4 mx-auto" method="POST" action="{{url('/create-location')}}">
    @csrf
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" placeholder="location" id="location" name="location" required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
