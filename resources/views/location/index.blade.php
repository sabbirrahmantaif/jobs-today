@extends('layouts.app')

@section('main-content')
@section('location.index', 'class=active')
<x-page-header header="Locations" page="location" />
@if (Session::has('alert'))
    <div class="alert alert-{{session('alert')}}">{{session('res')}}</div>
@endif
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->id }}</td>
                            <td>{{ $location->location }}</td>
                            <td>{{ $location->created_at }}</td>
                            <td>{{ $location->updated_at }}</td>
                            <td><a href="{{ route('location.edit', $location->id) }}"><button
                                        class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ route('location.destroy', $location->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <td><button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
