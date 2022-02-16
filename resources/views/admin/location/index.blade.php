@extends('layouts.admin')

@section('main-content')
@section('location.index', 'class=active')
@if (Session::has('alert'))
    <div class="alert alert-{{ session('alert') }}">{{ session('res') }}</div>
@endif
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>Locaion</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->name }}</td>
                            <td><a href="{{ route('location.edit', $location->id) }}"><button class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ route('location.destroy', $location->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <td><button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
