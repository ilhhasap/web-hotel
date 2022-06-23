<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        return view('hotels', [
            "title" => "Cari Hotel",
            "hotels" => Hotel::all(),
        ]);
    }
}

   