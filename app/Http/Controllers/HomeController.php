<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index() {

        // get date from db
        $cars = Car::all(); //SELECT * FROM 'cars'
        //dd($cars);

        return view('home', compact('cars'));
    }
}
