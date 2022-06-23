<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\City;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            "title" => "Home",
            "cities" => City::all()
        ]);
    }

    public function city() {
        // $nameCity = City::find(request('search'));
        $nameCity = City::select('name')->where('id', request('search'))->first();
        $hotels = City::find(request('search'))->hotels;
        // $cities = City::hotels();
        return view('category', [
            "title" => "Hotel " . $nameCity,
            "nameCity" => $nameCity,
            "hotels" => $hotels
        ]);
    }
}