@extends('layouts.admin')

@section('main-content')
@section('company.index', 'class=active')
@if (Session::has('alert'))
    <div class="alert alert-{{ session('alert') }}">{{ session('res') }}</div>
@endif
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
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td><img width="80px" src="{{ asset('storage/app/'.$company->image) }}" alt="*"></td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->phone }}</td>
                            <td><a href="{{ url('admin/company/edit', $company->id) }}"><button class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <td><button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                            </form>
                            @if ($company->approved)
                                <form action="{{ route('disapprove-company') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $company->id }}">
                                    <td><button type="submit" class="btn btn-sm btn-danger">Disapprove</button></td>
                                </form>
                            @else
                                <form action="{{ route('approve-company') }}" method="post">
                                    <input type="hidden" name="id" value="{{ $company->id }}">
                                    @csrf
                                    <td><button type="submit" class="btn btn-sm btn-success">Approve</button></td>
                                </form>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
