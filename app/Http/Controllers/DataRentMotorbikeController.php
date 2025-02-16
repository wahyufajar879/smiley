<?php

namespace App\Http\Controllers;

use App\Models\DataRentMotorbike;
use Illuminate\Http\Request;

class DataRentMotorbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataRentMotorbikes = DataRentMotorbike::all(); // Ambil semua data rent motorbike
        return view('data.rent.index', compact('dataRentMotorbikes')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.rent.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_motorbike' => 'required',
            'type_motorbike' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        DataRentMotorbike::create([
            'category_motorbike' => $request->category_motorbike,
            'type_motorbike' => $request->type_motorbike,
            'price' => $request->price,
        ]);

        return redirect()->route('data_rent_motorbikes.index')
            ->with('success', 'Data Rent Motorbike berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataRentMotorbike $dataRentMotorbike)
    {
        return view('data.rent.show', compact('dataRentMotorbike'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataRentMotorbike $dataRentMotorbike)
    {
        return view('data.rent.edit', compact('dataRentMotorbike'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataRentMotorbike $dataRentMotorbike)
    {
        $request->validate([
            'category_motorbike' => 'required',
            'type_motorbike' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        $dataRentMotorbike->update([
            'category_motorbike' => $request->category_motorbike,
            'type_motorbike' => $request->type_motorbike,
            'price' => $request->price,
        ]);

        return redirect()->route('data_rent_motorbikes.index')
            ->with('success', 'Data Rent Motorbike berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataRentMotorbike $dataRentMotorbike)
    {
        $dataRentMotorbike->delete();

        return redirect()->route('data_rent_motorbikes.index')
            ->with('success', 'Data Rent Motorbike berhasil dihapus.');
    }
}