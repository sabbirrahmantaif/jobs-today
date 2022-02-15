<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function deleteQuiz($id)
    {

        try {
            Quiz::where('id', $id)->delete();
            return redirect()->back()->with('res', ['type' => 'success', 'message' => 'Succesfully Deleted']);
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('res', ['type' => 'danger', 'message' => json_encode($ex->getMessage())]);
        }
    }

    public function getQuizzesByCategory()
    {
        $category_id = request('id');
        $quizzes = Quiz::where('category_id', $category_id)->get();
        if (request('type') == 'admin') {
            return view('admin.quiz.index', ['category_id' => $category_id, 'quizzes' => $quizzes]);
        }else{
            return $quizzes;
        }
    }

    public function createQuizesByCategory($category_id)
    {
        return view('admin.quiz.create', ['category_id' => $category_id]);
    }

    public function insertQuizesByCategory(Request $request)
    {
        try {
            $all = $request->all();
            unset($all['_token']);
            Quiz::insert($all);
            return redirect('admin/quiz?type=admin&id=' . $request->category_id)->with('res', ['type' => 'success', 'message' => 'Succesfully added']);
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('res', ['type' => 'danger', 'message' => json_encode($ex->getMessage())]);
        }
    }

    public function editQuiz($id)
    {
        return view('admin.quiz.edit',['quiz'=>Quiz::where('id',$id)->first()]);
    }

    public function updateQuiz(Request $request)
    {
        $quiz = Quiz::where('id',$request->id)->first();
        $quiz->question = $request->question;
        $quiz->option1 = $request->option1;
        $quiz->option2 = $request->option2;
        $quiz->option3 = $request->option3;
        $quiz->option4 = $request->option4;
        $quiz->correct_answer = $request->correct_answer;
        $quiz->save();
        return redirect('admin/quiz?type=admin&id='.$quiz->category_id);
    }
}
