<?php

namespace App\Http\Controllers;

use App\Models\DataTrip;
use Illuminate\Http\Request;

class DataTripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataTrips = DataTrip::all(); // Ambil semua data trip
        return view('data.trip.index', compact('dataTrips')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.trip.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_vehicle' => 'required',
            'destination' => 'required',
            'place_to_go' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        DataTrip::create([
            'type_vehicle' => $request->type_vehicle,
            'destination' => $request->destination,
            'place_to_go' => $request->place_to_go,
            'price' => $request->price,
        ]);

        return redirect()->route('data_trips.index')
            ->with('success', 'Data Trip berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataTrip $dataTrip)
    {
        return view('data.trip.show', compact('dataTrip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataTrip $dataTrip)
    {
        return view('data.trip.edit', compact('dataTrip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataTrip $dataTrip)
    {
        $request->validate([
            'type_vehicle' => 'required',
            'destination' => 'required',
            'place_to_go' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        $dataTrip->update([
            'type_vehicle' => $request->type_vehicle,
            'destination' => $request->destination,
            'place_to_go' => $request->place_to_go,
            'price' => $request->price,
        ]);

        return redirect()->route('data_trips.index')
            ->with('success', 'Data Trip berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataTrip $dataTrip)
    {
        $dataTrip->delete();

        return redirect()->route('data_trips.index')
            ->with('success', 'Data Trip berhasil dihapus.');
    }
}