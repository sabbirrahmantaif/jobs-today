@extends('layouts.admin')

@section('main-content')
@section('users.index', 'class=active')
@if (Session::has('alert'))
    <div class="alert alert-{{ session('alert') }}">{{ session('res') }}</div>
@endif
<div class="card">
    <div class="card-body">
        <div class="m-t-25">
            <table id="data-table" class="table table-responsive">
                <thead>
                    <tr>
                        <th>highlighted</th>
                        <th>image</th>
                        <th>Name</th>
                        <th>birth_date</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="form-group d-flex align-items-center">
                                    <div class="switch m-r-10">
                                        <input type="checkbox" id="switch-{{ $user->id }}"
                                            {{ $user->highlight ? 'checked' : null }} value="{{ $user->id }}"
                                            onClick="Highlight({{ $user->id }})">
                                        <label for="switch-{{ $user->id }}"></label>
                                    </div>
                                    <label>Highlight</label>
                                </div>
                                <script>
                                    function Highlight(id) {
                                        fetch(`users/highlight/${id}`)
                                            .then(response => response.json())
                                            .then(data => console.log(data));
                                    }
                                </script>
                            </td>
                            <td><img src="{{ asset('storage/app/' . $user->image) }}" alt="" width="100%"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->birth_date }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->gender }}</td>
                            <td><a href="{{ url('admin/users/cv', $user->id) }}">CV</a></td>
                            <!--@if ($user->approvement)
-->
                            <!--    <td><a href="{{ url('admin/users/status', $user->id) }}"><button-->
                            <!--                class="btn btn-sm btn-success">Disapprove</button></a></td>-->
                        <!--@else-->
                            <!--    <td><a href="{{ url('admin/users/status', $user->id) }}"><button-->
                            <!--                class="btn btn-sm btn-info">Approve</button></a></td>-->
                            <!--
@endif-->
                            <td><a href="{{ url('admin/users/edit', $user->id) }}"><button
                                        class="btn btn-sm btn-warning">Edit</button></a></td>
                            <form action="{{ url('admin/users/delete', $user->id) }}" method="post">
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
