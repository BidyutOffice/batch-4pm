<?php

// MVC
// M -> MODELS app/models/
// V -> VIEWS resources/views/ *.blade.php
// C -> CONTROLLER app/http/controllers/

// FOR ROUTES
// routes/web.php

// browser/client -> request -> server (url) -> ganarate resource -> browser/client
// youtube.com/contact/ -> contact page // GET request
// youtube.com/about/ -> about page
// register -> (store on server)   -> POST
// GET, POST, DELETE, PUT, PATCH // path (maindomain/contact/)

// client -> server (route -> controller) -> resource -> client

// create a controller
// php artisan make:controller PagesController - normal
// php artisan make:controller ResourceController -r normal

// Check all Routes
// php artisan route:list

// Make a table blueprint
// php artisan make:migration create_tablename_table to create table schema
// prepare the table schema
// php artisan migrate
// migration files
// database/migrations/ *.php files

// For Models
// create -> php artisan make:model Modelname (name of the table schema)

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;

Route::get('/', [PagesController::class, "index"])->name("home");
Route::get("/contact-us", [PagesController::class, "contact"])->name("conatct");

Route::prefix("about-us")->group(function () {

    Route::get("/", [PagesController::class, "about"])->name("about");
    Route::get("/{userid}", [PagesController::class, "aboutSinglePage"])
        ->where("userid", "[0-9]+")
        ->name('about.userid');
});

// Route::get("/register", [PagesController::class, "register"])->name("register");
// Route::post("/register-request", [PagesController::class, "registerRequest"])->name("registerRequest");


// Route::get("/flights", [PagesController::class, "getFlights"])->name("flights");

Route::resource("/users", UsersController::class);
