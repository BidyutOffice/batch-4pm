<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Flight;

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

    public function registerRequest(Request $request) {}

    public function getFlights()
    {
        $flights = Flight::simplePaginate(2);
        // dd($flights);

        return view("flights", compact("flights"));
    }
}
