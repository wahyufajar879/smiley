<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailsController extends Controller
{
    public function index()
    {
        return view('pages.tour_details');
    }
}