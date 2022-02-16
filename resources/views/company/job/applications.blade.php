@extends('layouts.company')
@section('job.index', 'class=active')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                {{-- <h5>{{$job->title->name}}</h5> --}}
                {{-- <div>
                    <a href="{{route('my-company.job.create',['company_id'=>$company->id])}}" class="btn btn-sm btn-primary">Post Job</a>
                </div> --}}
            </div>
            {{-- @if (session()->has('res'))
                <div class="alert alert-{{ session('res')['type'] }}">{{ session('res')['message'] }}</div>
            @endif --}}
            <div class="m-t-30">
                <div class="table-responsive">
                    <table id="data-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>cv</th>
                                <th>applied time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($apps as $app)
                                <tr>
                                    <td>{{ $app->user->name }}</td>
                                    <td>{{ $app->user->email }}</td>
                                    <td>{{ $app->user->phone }}</td>
                                    <td><a href="#">cv</a></td>
                                    <td>{{ $app->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
