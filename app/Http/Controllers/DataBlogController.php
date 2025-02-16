<?php

namespace App\Http\Controllers;

use App\Models\DataBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class DataBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBlogs = DataBlog::all(); // Ambil semua data blog
        return view('data.blog.index', compact('dataBlogs')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.blog.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:900000', // Validasi image
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/blog_images'); // Simpan gambar ke storage/app/public/blog_images
            $imagePath = str_replace('public/', '', $imagePath); // Hapus 'public/' dari path
        }

        DataBlog::create([
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath, // Simpan nama file ke database
        ]);

        return redirect()->route('data_blogs.index')
            ->with('success', 'Data Blog berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBlog $dataBlog)
    {
        return view('data.blog.show', compact('dataBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataBlog $dataBlog)
    {
        return view('data.blog.edit', compact('dataBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataBlog $dataBlog)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi image
        ]);

        $imagePath = $dataBlog->image; // Gunakan gambar yang sudah ada secara default

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($dataBlog->image) {
                Storage::delete('public/' . $dataBlog->image);
            }

            $imagePath = $request->file('image')->store('public/blog_images'); // Simpan gambar baru
            $imagePath = str_replace('public/', '', $imagePath); // Hapus 'public/' dari path
        }

        $dataBlog->update([
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath, // Simpan nama file ke database
        ]);

        return redirect()->route('data_blogs.index')
            ->with('success', 'Data Blog berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataBlog $dataBlog)
    {
        // Hapus gambar terkait jika ada
        if ($dataBlog->image) {
            Storage::delete('public/' . $dataBlog->image);
        }

        $dataBlog->delete();

        return redirect()->route('data_blogs.index')
            ->with('success', 'Data Blog berhasil dihapus.');
    }
}