<?php

namespace App\Http\Controllers;

use App\Models\Snorkling;
use App\Models\DataSnorkling; // Import model DataSnorkling
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SnorklingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $snorklings = Snorkling::all();
        return view('snorkling.index', compact('snorklings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data type_package unik dari tabel data_snorklings
        $packages = DataSnorkling::distinct()->pluck('type_package');

        return view('snorkling.create', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'select_package' => 'required',
            'destination' => 'required',
            'person' => 'required|integer|min:1', // Minimal 1 orang
        ]);

        Snorkling::create($request->all());

        return redirect()->route('snorklings.index')
            ->with('success', 'Pemesanan Snorkling berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Snorkling $snorkling)
    {
        return view('snorkling.show', compact('snorkling'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Snorkling $snorkling)
    {
         // Ambil data type_package unik dari tabel data_snorklings
         $packages = DataSnorkling::distinct()->pluck('type_package');

         return view('snorkling.edit', compact('snorkling', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Snorkling $snorkling)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'select_package' => 'required',
            'destination' => 'required',
            'person' => 'required|integer|min:1', // Minimal 1 orang
        ]);

        $snorkling->update($request->all());

        return redirect()->route('snorklings.index')
            ->with('success', 'Pemesanan Snorkling berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Snorkling $snorkling)
    {
        $snorkling->delete();

        return redirect()->route('snorklings.index')
            ->with('success', 'Pemesanan Snorkling berhasil dihapus.');
    }

    public function getDestinations(Request $request)
{
    $package = $request->input('package');
    $destinations = DataSnorkling::where('type_package', $package)->pluck('destination');

    Log::info('Package: ' . $package); // Tambahkan ini
    Log::info('Destinations: ' . json_encode($destinations)); // Tambahkan ini

    return response()->json($destinations);
}
}