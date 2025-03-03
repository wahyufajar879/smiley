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
use App\Models\DataBlog; //Tambahkan code ini
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Show the application's homepage.
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

        // Ambil data blog dengan pagination
        $blogs = DataBlog::orderBy('date', 'desc')->paginate(5); // 5 item per halaman



        return view('pages.index', compact('destinations', 'dataSnorklings', 'dataRentMotorbikes', 'typeVehicles', 'tourDestinations', 'blogs'));
    }

    public function storeTrip(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_vehicle' => 'required',
            'people' => 'required|integer|min:1',
            'destination' => 'required',
            'place_to_go' => 'required',
        ]);

        $trip = Trip::create($request->all());
        $message = "New Order For Trip:\n" .
        "Name: " . $trip->name . "\n" .
        "Phone Number: " . $trip->no_phone . "\n" .
        "Type Vehicle: " . $trip->type_vehicle . "\n" .
        "People: " . $trip->people . " Pax " . " \n".
        "Destination: " . $trip->destination . " \n" .
        "Place To Go: " . $trip->place_to_go . " \n";
        

// Encode pesan agar aman untuk URL
$encodedMessage = urlencode($message);

// Buat URL WhatsApp
$whatsappURL = "https://wa.me/+6281249133952?text=" . $encodedMessage;

// Redirect ke WhatsApp
return redirect()->away($whatsappURL);
    }

    public function storeSnorkling(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'select_package' => 'required',
            'destination' => 'required',
            'person' => 'required|integer|min:1', // Minimal 1 orang
        ]);

        $snorkling = Snorkling::create($request->all());

        // Buat pesan WhatsApp
        $message = "New Order For Snorkling:\n" .
            "Name: " . $snorkling->name . "\n" .
            "Phone Number: " . $snorkling->no_phone . "\n" .
            "Package: " . $snorkling->select_package . "\n" .
            "Destination: " . $snorkling->destination . "\n" .
            "People: " . $snorkling->person . " Pax";


        // Encode pesan agar aman untuk URL
        $encodedMessage = urlencode($message);

        // Buat URL WhatsApp
        $whatsappURL = "https://wa.me/+6281249133952?text=" . $encodedMessage;

        // Redirect ke WhatsApp
        return redirect()->away($whatsappURL);
    }
    public function storeRentScooter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_phone' => 'required',
            'type_motorbike' => 'required',
            'date' => 'required|date',
            'rent_day' => 'required|integer|min:1',
        ]);

        $rent = Rent::create($request->all());

        $message = "New Order For Rent Scooter:\n" .
            "Name: " . $rent->name . "\n" .
            "Phone Number: " . $rent->no_phone . "\n" .
            "Date: " . $rent->date . "\n" .
            "Type Motorbike: " . $rent->type_motorbike . "\n" .
            "Rent Day: " . $rent->rent_day . " Days";


        // Encode pesan agar aman untuk URL
        $encodedMessage = urlencode($message);

        // Buat URL WhatsApp
        $whatsappURL = "https://wa.me/+6281249133952?text=" . $encodedMessage;

        // Redirect ke WhatsApp
        return redirect()->away($whatsappURL);
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
        $boat = $request->input('boat'); // Jika Anda memerlukan boat untuk memfilter waktu

        $query = DataTicket::where('destination', $destination);

        if ($boat) { // Hanya jika Anda menggunakan boat untuk memfilter waktu
            $query->where('type_fast_boot', $boat);
        }

        $times = $query->pluck('time');

        return response()->json($times);
    }

    public function storeTicket(Request $request)
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

        $ticket = Ticket::create($request->all());
        $message = "New Order For Ticket:\n" .
            "Name: " . $ticket->name . "\n" .
            "Phone Number: " . $ticket->no_phone . "\n" .
            "Destination: " . $ticket->destination . "\n" .
            "Select Boat: " . $ticket->select_boat . "\n" .
            "Date: " . $ticket->tanggal . "\n" .
            "Time: " . $ticket->time . "\n" .
            "People: " . $ticket->person . " Pax";


        // Encode pesan agar aman untuk URL
        $encodedMessage = urlencode($message);

        // Buat URL WhatsApp
        $whatsappURL = "https://wa.me/+6281249133952?text=" . $encodedMessage;

        // Redirect ke WhatsApp
        return redirect()->away($whatsappURL);

    }

    public function blog(Request $request)
    {
        $blogs = DataBlog::orderBy('date', 'desc')->paginate(5);

        // Ambil data kategori dan jumlah postingan
        $categories = DataBlog::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->orderBy('category')
            ->get();

        // Ambil data posting terbaru
        $recentPosts = DataBlog::orderBy('date', 'desc')->take(4)->get();

        return view('pages.blog', compact('blogs', 'categories', 'recentPosts'));
    }
    public function searchBlog(Request $request)
    {
        $search = $request->input('search');

        $blogs = DataBlog::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('category', 'LIKE', "%{$search}%")
            ->orderBy('date', 'desc')
            ->paginate(5);

        // Ambil data kategori dan jumlah postingan
        $categories = DataBlog::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->orderBy('category')
            ->get();

        // Ambil data posting terbaru
        $recentPosts = DataBlog::orderBy('date', 'desc')->take(4)->get();

        return view('pages.blog', compact('blogs', 'categories', 'recentPosts'));
    }
    public function showSingleBlog($id)
    {
        $blog = DataBlog::findOrFail($id);

        return view('pages.singleblog', compact('blog'));
    }
}