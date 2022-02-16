@extends('layouts.admin')

@section('main-content')

@if (isset($user))
<pre>{{$user}}</pre>
<div class="card">
    <div class="card-body">
        <form class="col-md-4 mx-auto" action="{{ url('admin/users/update') }}" method="post">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="name" id="name" name="name" required value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="email" id="email" name="email" required value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" required value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                <input type="text" class="form-control" placeholder="birth_date" id="birth_date" name="birth_date" required value="{{$user->birth_date}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
    @else
    <h1>No cv available</h1>
@endif
@endsection
