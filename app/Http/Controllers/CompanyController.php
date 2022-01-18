<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->get();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "phone" => 'required',
            "password" => 'required|min:6|max:12',
            "description" => 'required',
        ]);
        $file = $request->file('image')->store('');
        $data['image'] = $file;
        Company::create($data);
        session()->flash('alert','success');
        $request->session()->flash('res','Created successfully');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.index', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "phone" => 'required',
            "description" => 'required',
            "password" => 'required|min:6|max:12',
        ]);
        if ($request->hasFile('image')) {
            Storage::delete([$company->image]);
            $image = $request->file('image')->store('');
            $company->image = $image;
        }
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->description = $request->description;
        $company->password = $request->password;
        $company->save();
        session()->flash('alert','warning');
        $request->session()->flash('res','updated successfully');
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        Storage::delete([$company->image]);
        $company->delete();
        session()->flash('alert','danger');
        session()->flash('res','deleted successfully');
        return back();
    }
}
