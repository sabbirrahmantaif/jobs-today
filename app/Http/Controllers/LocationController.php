<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('id','DESC')->get();
        return view('admin.location.index',['locations'=>$locations]);
    }

    public function edit(Location $location)
    {
        return view('admin.location.edit',compact('location'));
    }

    public function update(Request $request,Location $location)
    {
        $location->name = $request->name;
        $location->save();
        return redirect()->route('location.index');
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        Location::create($request->all());
        return redirect()->route('location.index');
    }

    public function destroy($id)
    {
        Location::where('id',$id)->delete();
        return redirect()->route('location.index');
    }
}
