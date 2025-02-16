<?php

namespace App\Http\Controllers;

use App\Models\DataSnorkling;
use Illuminate\Http\Request;

class DataSnorklingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSnorklings = DataSnorkling::all(); // Ambil semua data snorkling
        return view('data.snorkling.index', compact('dataSnorklings')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.snorkling.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_package' => 'required',
            'destination' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        DataSnorkling::create([
            'type_package' => $request->type_package,
            'destination' => $request->destination,
            'price' => $request->price,
        ]);

        return redirect()->route('data_snorklings.index')
            ->with('success', 'Data Snorkling berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSnorkling $dataSnorkling)
    {
        return view('data.snorkling.show', compact('dataSnorkling'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSnorkling $dataSnorkling)
    {
        return view('data.snorkling.edit', compact('dataSnorkling'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSnorkling $dataSnorkling)
    {
        $request->validate([
            'type_package' => 'required',
            'destination' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        $dataSnorkling->update([
            'type_package' => $request->type_package,
            'destination' => $request->destination,
            'price' => $request->price,
        ]);

        return redirect()->route('data_snorklings.index')
            ->with('success', 'Data Snorkling berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataSnorkling $dataSnorkling)
    {
        $dataSnorkling->delete();

        return redirect()->route('data_snorklings.index')
            ->with('success', 'Data Snorkling berhasil dihapus.');
    }
}