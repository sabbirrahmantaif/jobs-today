@extends('layouts.admin')

@section('main-content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <form class="col-md-4 mx-auto" action="{{ route('location.update',$location->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Location</label>
                    <input type="text" class="form-control" placeholder="Location" id="name" name="name"
                        value="{{ $location->name }}" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
