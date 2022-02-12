@extends('layouts.company')
@section('job.create', 'class=active')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <form class="col-md-4 mx-auto" method="post" action="{{ route('job.store') }}">
                @csrf
                <input type="hidden" name="company_id" value="{{ session('company')['id'] }}">
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" placeholder="Position" id="position" name="position" required
                        value="developer head">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <select class="form-control" id="title" name="title_id" required>
                        <option value="">Select a title</option>
                        @foreach ($titles as $title)
                            <option value="{{$title->id}}">{{$title->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id" required>
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vacancy">Vacancy</label>
                    <input type="text" class="form-control" placeholder="VACANCY" id="vacancy" name="vacancy" required value="5">
                </div>
                <div class="form-group">
                    <label for="deadline">DEADLINE</label>
                    <input type="date" class="form-control" placeholder="DEADLINE" id="deadline" name="deadline"
                        value="02/28/2022" required>
                </div>
                <div class="form-group">
                    <label for="salary">SALARY</label>
                    <input type="text" class="form-control" placeholder="SALARY" id="salary" name="salary" required
                        value="20000 tk">
                </div>
                <div class="form-group">
                    <label for="description">DESCRIPTION</label>
                    <textarea type="text" class="form-control" placeholder="DESCRIPTION" id="description"
                        name="description" required>this is a description</textarea>
                </div>
                <div class="form-group">
                    <label for="nature">NATURE</label>
                    <input type="text" class="form-control" placeholder="NATURE" id="nature" name="nature" required
                        value="Remote">
                </div>
                <div class="form-group">
                    <label for="education">EDUCATION</label>
                    <input type="text" class="form-control" placeholder="EDUCATION" id="education" name="education"
                        required value="BSC in CSE">
                </div>
                <div class="form-group">
                    <label for="experience">EXPERIENCE</label>
                    <input type="text" class="form-control" placeholder="EXPERIENCE" id="experience" name="experience"
                        required value="2 years">
                </div>
                <div class="form-group">
                    <label for="requirements">REQUIREMENTS</label>
                    <textarea type="text" class="form-control" placeholder="REQUIREMENTS" id="requirements"
                        name="requirements" required>react js+native</textarea>
                </div>
                <div class="form-group">
                    <label for="other_benefits">OTHER BENEFITS</label>
                    <textarea type="text" class="form-control" placeholder="OTHER BENEFITS" id="other_benefits"
                        name="other_benefits" required>contact us</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
