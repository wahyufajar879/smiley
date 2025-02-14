<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnorklingController extends Controller
{
    public function index()
    {
        return view('snorkling.datasnorkling');
    }
}
