@extends('layouts.company')
@section('job.index', 'class=active')
@section('main-content')
    <div class="card">
        <div class="card-body">
            @if (session()->has('res'))
                <div class="alert alert-{{ session('res')['type'] }}">{{ session('res')['message'] }}</div>
            @endif
            <form class="col-md-4 mx-auto" method="post" action="{{ url('/job/'.$job->id.'/update') }}">
                @csrf
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" placeholder="Position" id="position" name="position" required
                        value="{{$job->position}}">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <select class="form-control" id="title" name="title_id" required>
                        <option value="{{$job->title->id}}">{{$job->title->title}}</option>
                        @foreach ($titles as $title)
                            <option value="{{$title->id}}">{{$title->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id" required>
                        <option value="{{$job->category->id}}">{{$job->category->category}}</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vacancy">Vacancy</label>
                    <input type="text" class="form-control" placeholder="VACANCY" id="vacancy" name="vacancy" value="{{$job->vacancy}}" required >
                </div>
                <div class="form-group">
                    <label for="deadline">DEADLINE</label>
                    <input type="text" class="form-control" placeholder="DEADLINE" id="deadline" name="deadline" value="{{$job->deadline}}" required>
                </div>
                <div class="form-group">
                    <label for="salary">SALARY</label>
                    <input type="text" class="form-control" placeholder="SALARY" id="salary" name="salary" value="{{$job->salary}}" required
                        >
                </div>
                <div class="form-group">
                    <label for="description">DESCRIPTION</label>
                    <textarea type="text" class="form-control" placeholder="DESCRIPTION" id="description"
                        name="description" required>{{$job->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="nature">NATURE</label>
                    <input type="text" class="form-control" placeholder="NATURE" id="nature" name="nature" required
                    value="{{$job->nature}}">
                </div>
                <div class="form-group">
                    <label for="education">EDUCATION</label>
                    <input type="text" class="form-control" placeholder="EDUCATION" id="education" name="education"
                        required value="{{$job->education}}">
                </div>
                <div class="form-group">
                    <label for="experience">EXPERIENCE</label>
                    <input type="text" class="form-control" placeholder="EXPERIENCE" id="experience" name="experience"
                        required value="{{$job->experience}}">
                </div>
                <div class="form-group">
                    <label for="requirements">REQUIREMENTS</label>
                    <textarea type="text" class="form-control" placeholder="REQUIREMENTS" id="requirements"
                        name="requirements" required>{{$job->requirements}}</textarea>
                </div>
                <div class="form-group">
                    <label for="other_benefits">OTHER BENEFITS</label>
                    <textarea type="text" class="form-control" placeholder="OTHER BENEFITS" id="other_benefits"
                        name="other_benefits" required>{{$job->other_benefits}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
