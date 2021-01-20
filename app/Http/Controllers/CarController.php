<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function store() {
       $car = new Car();

       $car->marca = 'Ferrari';
       $car->modello = '488';
       $car->targa = 'GH852GT';

       $car->save();

       
    }
}
