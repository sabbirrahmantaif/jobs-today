@extends('layouts.app')

@section('main-content')
@section('company.index', 'class=active')
<x-page-header header="Companies" page="company" />
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td><img width="100%" src="{{ asset('storage/app/'.$company->image) }}" alt="*"></td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->phone }}</td>
                            <td><a href="{{ route('company.edit', $company->id) }}"><button
                                        class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ route('company.destroy', $company->id) }}" method="post">
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
