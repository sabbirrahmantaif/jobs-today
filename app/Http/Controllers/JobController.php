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
            $locations = Company::select('location')->get();
            $categories = Category::get();
            $titles = Title::get();
            return [
                "location" => $locations,
                "categories" => $categories,
                "titles" => $titles,
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
                    return Job::where('title_id', $title)->with(['category','title','company'])->get();
                }
                elseif (!$location && !$title) {
                    return Job::where('category_id', $category)->with(['category','title','company'])->get();
                }
                elseif (!$category && !$title) {
                    return Job::with(['category','title','company'])->whereHas('company',function ($q) use($location)
                    {
                        $q->where('location',$location);
                    })->get();
                }
                elseif (!$category) {
                    return Job::where(['title_id' => $title])->whereHas('company',function ($q) use($location)
                    {
                        $q->where('location',$location);
                    })->with(['category','title','company'])->get();
                }
                elseif (!$location) {
                    return Job::where(['category_id' => $category, 'title_id' => $title])->with(['category','title','company'])->get();
                }
                elseif (!$title) {
                    return Job::where(['category_id' => $category])->whereHas('company',function ($q) use($location)
                    {
                        $q->where('location',$location);
                    })->with(['category','title','company'])->get();
                }
                else {
                    return Job::where(['category_id' => $category, 'title_id' => $title])->with(['category','title','company'])->get();
                }
            } else {
                return Job::take(15)->orderBy('id', 'desc')->with(['category','title','company'])->get();
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
