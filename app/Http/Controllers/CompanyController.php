<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function disapproveCompany(Request $request)
    {
        $company = Company::find($request->id);
        $company->approved = false;
        $company->save();
        return back();
    }
    public function approveCompany(Request $request)
    {
        $company = Company::find($request->id);
        $company->approved = true;
        $company->save();
        return back();
    }
    public function home()
    {
        $res = Company::where('id',session('company')->id)->with('jobs')->first();
        return view('company.index',['company'=>$res]);
    }

    public function logout()
    {
        session()->forget('company');
        return redirect('login');
    }

    public function login(Request $request)
    {
        $response = Company::where(['email' => $request->email, 'password' => $request->password])->first();
        // return print($response);
        if ($response) {
            if ($response->approved) {
                session()->put('company',$response);
                return redirect('/');
            }else{
                return redirect('/login')->with('res',['type'=>'danger','message'=>'This company not activated yet']);
            }
        }else{
            return redirect('/login')->with('res',['type'=>'danger','message'=>'credentials not matched']);
        }
    }

    public function registration(Request $request)
    {
        $request->validate([
            'email'=>'email|unique:companies,email'
        ]);
        if (Company::create($request->all())) {
            session()->flash('res', ['type' => 'success', 'message' => 'Created successfully, Login to continue']);
            return redirect('login');
        } else {
            return redirect()->back()->with('res', ['type' => 'danger', 'message' => 'Give valid informations']);
        }
    }

    // all above for company pannel and below for admin pannel

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->get();
        return view('admin.company.index', compact('companies'));
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
        $data['approved'] = $request->approved==="on"?true:false;
        $file = $request->file('image')->store('');
        $data['image'] = $file;
        Company::create($data);
        session()->flash('alert', 'success');
        $request->session()->flash('res', 'Created successfully');
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
            "location" => 'required'
        ]);
        if ($request->hasFile('image')) {
            Storage::delete([$company->image]);
            $image = $request->file('image')->store('');
            $company->image = $image;
        }
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->description = $request->description;
        $company->password = $request->password;
        $company->location = $request->location;
        $company->save();
        session()->put('company',$company);
        return redirect('/');
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
        session()->flash('alert', 'danger');
        session()->flash('res', 'deleted successfully');
        return back();
    }
}
