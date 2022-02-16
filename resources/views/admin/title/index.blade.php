@extends('layouts.admin')

@section('main-content')
@section('title.index', 'class=active')
@if (Session::has('alert'))
    <div class="alert alert-{{session('alert')}}">{{session('res')}}</div>
@endif
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($titles as $title)
                        <tr>
                            <td>{{ $title->title }}</td>
                            <td>{{ $title->created_at }}</td>
                            <td>{{ $title->updated_at }}</td>
                            <td><a href="{{ route('title.edit', $title->id) }}"><button
                                        class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ route('title.destroy', $title->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <td><button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
