@extends('layouts.admin')

@section('main-content')
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" action="{{ url('admin/users/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                @if ($user->image)
                    <div class="text-center">
                        <img src="{{ asset('storage/app/' . $user->image) }}" alt="404">
                    </div>
                @endif
                <div class="form-group">
                    <label for="image">Profile Pic</label>
                    <input type="file" class="form-control" placeholder="profile pic" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" required
                        value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="email" id="email" name="email" required
                        value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" required
                        value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                        <option value="female">female</option>
                        <option value="male">male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="text" class="form-control" placeholder="birth_date" id="birth_date" name="birth_date"
                        required value="{{ $user->birth_date }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
