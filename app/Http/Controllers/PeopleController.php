<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function insert(Request $req)
    {
        $image = $req->file('image')->store('');
        $user = new People();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = $req->password;
        $user->image = $image;
        $user->save();
        $req->session()->flash('res','addedd successfully');
        return redirect()->back();
    }

    public function get(Request $req)
    {
        $people = People::all();
        return view('user',['peoples'=>$people]);
    }
}
