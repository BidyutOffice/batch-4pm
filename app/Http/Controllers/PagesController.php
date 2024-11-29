<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return "about us page";
    }

    public function aboutSinglePage(string $userid)
    {
        if ($userid > 5)
            return view("about", compact("userid"));

        return "not available";
    }

    public function register()
    {
        return view("register");
    }

    public function registerRequest(Request $request)
    {
        $request->validate([
            "name" => ["required", "min:6"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "min:8"],
        ], [
            "name.required" => "please provide a name!",
            "name.min" => "please provide a name character, minimum 6",
            "password.min" => "please provide a password character, minimum 8",
        ]);

        $res = User::create([
            "name" => $request["name"],
            "email" =>  $request["email"],
            "password" =>  $request["password"],
        ]);

        if ($res) {
            return redirect()->back()->with("success", "Successfully created");
        } else {
            return redirect()->back()->with("error", "create unsuccessful");
        }
    }
}
