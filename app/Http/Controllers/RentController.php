<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\DataRentMotorbike; // Import model DataRentMotorbike
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rents = Rent::all();
        return view('rent.index', compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeMotorbikes = DataRentMotorbike::distinct()->pluck('type_motorbike');
        return view('rent.create', compact('typeMotorbikes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_motorbike' => 'required',
            'date' => 'required|date',
            'rent_day' => 'required|integer|min:1',
        ]);

        Rent::create($request->all());

        return redirect()->route('rents.index')
            ->with('success', 'Pemesanan Rent Motorbike berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rent $rent)
    {
        return view('rent.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        $typeMotorbikes = DataRentMotorbike::distinct()->pluck('type_motorbike');
        return view('rent.edit', compact('rent', 'typeMotorbikes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rent $rent)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_motorbike' => 'required',
            'date' => 'required|date',
            'rent_day' => 'required|integer|min:1',
        ]);

        $rent->update($request->all());

        return redirect()->route('rents.index')
            ->with('success', 'Pemesanan Rent Motorbike berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();

        return redirect()->route('rents.index')
            ->with('success', 'Pemesanan Rent Motorbike berhasil dihapus.');
    }
}