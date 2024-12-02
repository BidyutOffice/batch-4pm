<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
