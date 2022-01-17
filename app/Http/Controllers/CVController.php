<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Http\Requests\StoreCVRequest;
use App\Http\Requests\UpdateCVRequest;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function upsert(Request $req)
    {
        try {
            $id = request('id');
            $response = CV::updateOrCreate(
                ['user_id' => $id],
                [
                    'user_id' => $id,
                    "name" => $req->name,
                    "email" => $req->email,
                    "phone" => $req->phone,
                    "address" => $req->address,
                    "career_objective" => $req->career_objective,
                    "skills" => $req->skills,
                    "experience" => $req->experience,
                    "achievements" => $req->achievements,
                    "education" => $req->education,
                    "language_proficiency" => $req->language_proficiency,
                ]
            );
            return [
                "status"=>200,
                "data"=>$response
            ];
        } catch (\Illuminate\Database\QueryException $ex) {
            return [
                "status"=>500,
                "data"=>$ex
            ];
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCVRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $cV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCVRequest  $request
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCVRequest $request, CV $cV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $cV)
    {
        //
    }
}
