@extends('layouts.company')

@section('main-content')
@section('application.index', 'class=active')
@if (Session::has('alert'))
    <div class="alert alert-{{ session('alert') }}">{{ session('res') }}</div>
@endif
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Applied Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->user->name }}</td>
                                <td>{{ $application->job->title->title }}</td>
                                <td>{{ $application->job->category->category }}</td>
                                <td>{{ $application->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
