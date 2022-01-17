@extends('layouts.app')

@section('company.create', 'class=active')
@section('main-content')
    <x-page-header header="Create Company" page="company" />
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Company Name</label>
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Company Email</label>
                    <input type="email" class="form-control" placeholder="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Company Phone</label>
                    <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="description">Company Description</label>
                    <input type="text" class="form-control" placeholder="description" id="description" name="description" required>
                </div>
                <div class="form-group">
                    <label for="image">Company Banner</label>
                    <input type="file" class="form-control" placeholder="image" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="password">Company Password</label>
                    <input type="password" class="form-control" placeholder="password" id="password" name="password" value="123456" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
