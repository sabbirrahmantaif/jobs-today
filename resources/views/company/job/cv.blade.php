@extends('layouts.company')
@section('job.index', 'class=active')
@section('main-content')
    @if (isset($cv))
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h1>{{ $cv->name }}</h1>
                        <h5>{{ $cv->career_objective }}</h5>
                    </div>
                    <div class="col-md-6 border-left">
                        <p>{{ $cv->email }}</p>
                        <p>{{ $cv->phone }}</p>
                        <p>From : {{ $cv->address }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Skills</h3>
                        @foreach (json_decode($cv->skills) as $skill)
                            <span>{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Achievements</h3>
                        @foreach (json_decode($cv->achievements) as $achievement)
                            <span>{{ $achievement }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Experience</h3>
                        @foreach (json_decode($cv->experience) as $experience)
                            <div>
                                <span>{{ $experience->name }}</span> | <span>{{ $experience->position }}</span> |
                                <span>{{ $experience->period }}</span> | <span>{{ $experience->project }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Education</h3>
                        @foreach (json_decode($cv->education) as $education)
                            <div>
                                <span>{{ $education->level }}</span> | <span>{{ $education->institute_name }}</span> |
                                <span>{{ $education->year }}</span> | <span>{{ $education->gpa_cgpa }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Language Proficiency</h3>
                @foreach (json_decode($cv->language_proficiency) as $language_proficiency)
                    <span>{{$language_proficiency->language_name}} - {{$language_proficiency->proficiency}},</span>
                @endforeach
            </div>
        </div>
        <h6 class="text-center">Last Modified : {{$cv->updated_at}}</h6>
    @else
        <h1>CV not added yet!</h1>
    @endif
@endsection
