<?php

namespace App\Http\Controllers;

use App\Models\DataTicket;
use Illuminate\Http\Request;

class DataTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataTickets = DataTicket::all(); // Ambil semua data ticket
        return view('data.ticket.index', compact('dataTickets')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.ticket.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_fast_boot' => 'required',
            'destination' => 'required',
            'time' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        DataTicket::create([
            'type_fast_boot' => $request->type_fast_boot,
            'destination' => $request->destination,
            'time' => $request->time,
            'price' => $request->price,
        ]);

        return redirect()->route('data_tickets.index')
            ->with('success', 'Data Ticket berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataTicket $dataTicket)
    {
        return view('data.ticket.show', compact('dataTicket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataTicket $dataTicket)
    {
        return view('data.ticket.edit', compact('dataTicket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataTicket $dataTicket)
    {
        $request->validate([
            'type_fast_boot' => 'required',
            'destination' => 'required',
            'time' => 'required',
            'price' => 'required|integer|min:0', // Validasi harga harus integer dan minimal 0
        ]);

        $dataTicket->update([
            'type_fast_boot' => $request->type_fast_boot,
            'destination' => $request->destination,
            'time' => $request->time,
            'price' => $request->price,
        ]);

        return redirect()->route('data_tickets.index')
            ->with('success', 'Data Ticket berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataTicket $dataTicket)
    {
        $dataTicket->delete();

        return redirect()->route('data_tickets.index')
            ->with('success', 'Data Ticket berhasil dihapus.');
    }
}