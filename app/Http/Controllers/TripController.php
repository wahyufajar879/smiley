<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\DataTrip; // Import model DataTrip
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();
        return view('trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data type_vehicle unik dari tabel data_trips
        $typeVehicles = DataTrip::distinct()->pluck('type_vehicle');
        $destinations = DataTrip::distinct()->pluck('destination');

        return view('trip.create', compact('typeVehicles', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_vehicle' => 'required',
            'people' => 'required|integer|min:1',
            'destination' => 'required',
            'place_to_go' => 'required',
        ]);

        Trip::create($request->all());

        return redirect()->route('trips.index')
            ->with('success', 'Pemesanan Trip berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        return view('trip.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        // Ambil data type_vehicle unik dari tabel data_trips
        $typeVehicles = DataTrip::distinct()->pluck('type_vehicle');
        $destinations = DataTrip::distinct()->pluck('destination');

        return view('trip.edit', compact('trip', 'typeVehicles', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_vehicle' => 'required',
            'people' => 'required|integer|min:1',
            'destination' => 'required',
            'place_to_go' => 'required',
        ]);

        $trip->update($request->all());

        return redirect()->route('trips.index')
            ->with('success', 'Pemesanan Trip berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('trips.index')
            ->with('success', 'Pemesanan Trip berhasil dihapus.');
    }

    public function getPlaceToGo(Request $request)
    {
        $destination = $request->input('destination');
        $placeToGo = DataTrip::where('destination', $destination)->value('place_to_go'); // Ambil hanya satu place_to_go

        return response()->json($placeToGo);
    }
}