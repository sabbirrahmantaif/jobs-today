@extends('layouts.app')

@section('main-content')
@section('title.edit', 'class=active')
<x-page-header header="Edit Title" page="title" />
<div class="card">
    <div class="card-body">
        <form class="col-md-4 mx-auto" action="{{ route('title.update',$title->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" placeholder="title" id="title" name="title" required value="{{$title->title}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
