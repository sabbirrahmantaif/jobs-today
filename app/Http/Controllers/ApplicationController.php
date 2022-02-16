<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Company;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

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

    public function company_index()
    {
        // $applications = Company::where('id',session('company')['id'])->with(['jobs'=>function ($q)
        // {
        //     $q->with(['applications'=>function ($q1)
        //     {
        //         $q1->with('user');
        //     }]);
        // }])->first();
        // file_put_contents('a.php',json_encode($applications,JSON_PRETTY_PRINT));
        return "Working on";
        // return view('company.application.index',['applications'=>$applications]);
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
    public function show(Application $application)
    {
        //
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
