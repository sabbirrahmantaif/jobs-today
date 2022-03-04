<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show_cv($id)
    {
        $userWithCv = User::where('id', $id)->with('cv')->first();
        return view('admin.users.cv', ['user'=> $userWithCv]);
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->birth_date = $request->birth_date;
        $user->gender = $request->gender;
        if ($request->hasFile('image')) {
            Storage::delete($user->image);
            $file = $request->file('image')->store('');
            $user->image = $file;
        }
        $user->save();
        return redirect('admin/users');
    }

    public function edit($id)
    {
        return view('admin.users.edit', ['user' => User::where('id', $id)->first()]);
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.users.index', ['users' => User::get()]);
    }

    public function status($id)
    {
        $user = User::where('id', $id)->first();
        $user->approvement = !$user->approvement;
        $user->save();
        return redirect()->back();
    }

    public function registration(Request $req)
    {
        try {
            $data = User::create(["name" => $req->name, "email" => $req->email, "phone" => $req->phone, "birth_date" => $req->birth_date, "password" => $req->password]);
            return ["status" => 200, "data" => $data];
        } catch (\Illuminate\Database\QueryException $ex) {
            return [
                "status" => 500,
                "data" => json_encode($ex->getMessage())
            ];
        }
    }

    public function login(Request $req)
    {
        try {
            $user = User::where(["email" => $req->email, "password" => $req->password])->first();
            if ($user) {
                if ($user->approvement) {
                    return [
                        "status" => 200,
                        "data" => $user
                    ];
                } else {
                    return [
                        "status" => 500,
                        "data" => "User not approved yet"
                    ];
                }
            } else {
                return [
                    "status" => 404,
                    "data" => "User not found"
                ];
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return [
                "status" => 500,
                "data" => json_encode($ex->getMessage())
            ];
        }
    }

    public function update_profile(Request $req)
    {
        $response = array();
        try {
            $user = User::find($req->id);
            if ($user) {
                try {
                    $user->update($req->input());
                    $response["status"] = 200;
                    $response["data"] = $user;
                } catch (\Illuminate\Database\QueryException $ex) {
                    $response["status"] = 500;
                    $response["data"] = $ex;
                }
            } else {
                $response["status"] = 404;
                $response["data"] = "user not found";
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            $response["status"] = 500;
            $response["data"] = $ex;
        }
        return $response;
    }

    public function update_image(Request $req)
    {
        $response = array();
        try {
            $user = User::find($req->id);
            Storage::delete($user->image);
            $file = $req->file('image')->store('');
            $user->update(["image" => $file]);
            if ($user) {
                $response["status"] = 200;
                $response["data"] = $user;
            } else {
                $response["status"] = 404;
                $response["data"] = "user not found";
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            $response["status"] = 500;
            $response["data"] = $ex;
        }
        return $response;
    }
}
