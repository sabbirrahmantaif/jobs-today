<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Company;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function apply_confirm(Request $request)
    {
        $status = Application::where(['user_id'=>$request->user_id,'job_id'=>$request->job_id])->first();
        return $status;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::with(['user','job'=>function ($q)
        {
            $q->with(['company','title','category']);
        }])->get();
        return view('admin.users.applications',['applications'=>$applications]);
    }

    public function job_applications($id)
    {
        return view('company.job.applications',['apps'=>Application::where('job_id',$id)->with(['user','job'=>function ($q)
        {
            $q->with(['title','category']);
        }])->get()]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Application::create($request->all());
        return [
            "status"=>200,
            "message"=>"Applyed successfully"
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $apps = Application::where('user_id',$request->id)->with(['job'=>function ($q)
        {
            $q->with(['company','title','category']);
        }])->get();
        return [
            "applications" => $apps
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
