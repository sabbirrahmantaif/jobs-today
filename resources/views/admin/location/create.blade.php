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
            <form class="col-md-4 mx-auto" action="{{ route('location.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Location</label>
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
