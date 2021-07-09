<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::all()->where('isHighligted', 1);
        return view('index')->with('cars', ['Nissan', 'Mercedes']);
    }
}
