<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // public function admin_login(Request $req)
    // {
    //     if ($req->username === 'admin@gmail.com' && $req->password === 'password') {
    //         Session::put('admin', true);
    //         return redirect('/');
    //     } else {
    //         return back();
    //     }
    // }

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
                return [
                    "status" => 200,
                    "data" => $user
                ];
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
