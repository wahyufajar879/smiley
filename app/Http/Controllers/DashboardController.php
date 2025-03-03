<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snorkling;
use App\Models\DataSnorkling;
use App\Models\DataRentMotorbike;
use App\Models\Rent;
use App\Models\Ticket;
use App\Models\DataTicket;
use App\Models\DataTrip;
use App\Models\Trip;
use App\Models\User; //Tambahkan
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Show the application's dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dataSnorklings = DataSnorkling::distinct()->get(['type_package']);
        $dataRentMotorbikes = DataRentMotorbike::distinct()->get(['type_motorbike']);
        $destinations = DataTicket::distinct()->pluck('destination');
        $typeVehicles = DataTrip::distinct()->pluck('type_vehicle');
        $tourDestinations = DataTrip::distinct()->pluck('destination');

        // Ambil jumlah data dari masing-masing model
        $totalSnorklings = Snorkling::count();
        $totalTickets = Ticket::count();
        $totalRents = Rent::count();
        $totalTrips = Trip::count();
        $totalUsers = User::count();

        return view('auth.dashboard', compact(
            'destinations', 
            'dataSnorklings', 
            'dataRentMotorbikes', 
            'typeVehicles', 
            'tourDestinations',
            'totalSnorklings',
            'totalTickets',
            'totalRents',
            'totalTrips',
            'totalUsers'
        ));
    }
}