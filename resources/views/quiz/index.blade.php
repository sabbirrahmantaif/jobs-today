@extends('layouts.app')

@section('main-content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url('quiz/create/' . $category_id) }}"><button class="btn btn-primary d-block ml-auto">Create Quiz</button></a>
            <div class="m-t-25">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>category</th>
                            <th>Correct Option</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        -@foreach ($quizzes as $quiz)
                            <tr>
                                <td>{{ $quiz->question }}</td>
                                <td>{{ $quiz->category->category }}</td>
                                <td>{{ $quiz->correct_answer }}</td>
                                <td>{{ $quiz->option1 }}</td>
                                <td>{{ $quiz->option2 }}</td>
                                <td>{{ $quiz->option3 }}</td>
                                <td>{{ $quiz->option4 }}</td>
                                <form action="{{ url('quiz/delete/'.$quiz->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <td><button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                                </form>
                            </tr>
                        @endforeach-
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Question</th>
                            <th>category</th>
                            <th>Correct Option</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
