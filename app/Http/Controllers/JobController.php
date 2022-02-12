<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function hot_jobs_values()
    {
        try {
            $locations = DB::table('locations')->get();
            $categories = DB::table('categories')->get();
            $titles = DB::table('titles')->get();
            return [
                "status" => 200,
                "data" => [
                    "location" => $locations,
                    "categories" => $categories,
                    "titles" => $titles,
                ]
            ];
        } catch (\Illuminate\Database\QueryException $ex) {
            return [
                "status"=>500,
                "data"=>$ex
            ];
        }
    }

    public function hot_jobs()
    {
        try {
            $location = request('location');
            $category = request('category');
            $title = request('title');
            if ($location || $category || $title) {
                if (!$location && !$category) {
                    return Job::where('title', $title)->get();
                } elseif (!$location && !$title) {
                    return Job::where('category', $category)->get();
                } elseif (!$category && !$title) {
                    return Job::where('location', $location)->get();
                } elseif (!$category) {
                    return Job::where(['location' => $location, 'title' => $title])->get();
                } elseif (!$location) {
                    return Job::where(['category' => $category, 'title' => $title])->get();
                } elseif (!$title) {
                    return Job::where(['category' => $category, 'location' => $location])->get();
                } else {
                    return Job::where(['category' => $category, 'location' => $location, 'title' => $title])->get();
                }
            } else {
                return Job::take(15)->orderBy('id', 'desc')->get();
            }
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
        return view('company.job.index',['company'=>Company::where('id',session('company')->id)->with('jobs')->first()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.job.create',['titles'=>Title::all(),'categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Job::create($request->all());
        return redirect('/job')->with('res',['type'=>'success','message'=>'created succcessfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
