<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\DataTicket; // Import model DataTicket
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data destination unik dari tabel data_tickets
        $destinations = DataTicket::distinct()->pluck('destination');

        return view('ticket.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'destination' => 'required',
            'select_boat' => 'required',
            'tanggal' => 'required|date',
            'time' => 'required',
            'person' => 'required|integer|min:1',
        ]);

        Ticket::create($request->all());

        return redirect()->route('tickets.index')
            ->with('success', 'Pemesanan Ticket berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        // Ambil data destination unik dari tabel data_tickets
        $destinations = DataTicket::distinct()->pluck('destination');
        return view('ticket.edit', compact('ticket', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'destination' => 'required',
            'select_boat' => 'required',
            'tanggal' => 'required|date',
            'time' => 'required',
            'person' => 'required|integer|min:1',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')
            ->with('success', 'Pemesanan Ticket berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')
            ->with('success', 'Pemesanan Ticket berhasil dihapus.');
    }

    public function getBoats(Request $request)
    {
        $destination = $request->input('destination');
        $boats = DataTicket::where('destination', $destination)->distinct()->pluck('type_fast_boot');

        return response()->json($boats);
    }

    public function getTimes(Request $request)
    {
        $destination = $request->input('destination');
        $boat = $request->input('boat');

        $times = DataTicket::where('destination', $destination)
                           ->where('type_fast_boot', $boat)
                           ->pluck('time');

        return response()->json($times);
    }
}