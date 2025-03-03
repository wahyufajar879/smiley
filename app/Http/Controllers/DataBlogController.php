<?php

namespace App\Http\Controllers;

use App\Models\DataBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator; // Import Validator facade
use Illuminate\Support\Str; // Import Str class

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
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:900000', // Validasi image
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed: ' . json_encode($validator->errors()));
            return back()->withErrors($validator)->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                Log::info('Image found in request');
                Log::info('Original file name: ' . $image->getClientOriginalName());
                Log::info('File size: ' . $image->getSize());

                // Generate nama file yang user-friendly
                $filename = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();

                // Simpan gambar ke public/blog_images dengan nama yang sudah diubah
                $imagePath = $image->storeAs('blog_images', $filename, 'public');

                Log::info('Image stored at: ' . $imagePath);
            } else {
                Log::error('File upload failed: ' . $image->getErrorMessage());
                return back()->with('error', 'Upload gambar gagal. Silakan coba lagi.');
            }
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
         $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:900000', // Validasi image
        ]);

         if ($validator->fails()) {
            Log::error('Validation failed: ' . json_encode($validator->errors()));
            return back()->withErrors($validator)->withInput();
        }

        $imagePath = $dataBlog->image; // Gunakan gambar yang sudah ada secara default

        if ($request->hasFile('image')) {
             $image = $request->file('image');
             if ($image->isValid()) {
                 // Hapus gambar lama jika ada
                if ($dataBlog->image) {
                    Storage::delete($dataBlog->image);
                }
                   Log::info('Image found in request');
                Log::info('Original file name: ' . $image->getClientOriginalName());
                Log::info('File size: ' . $image->getSize());
                 // Generate nama file yang user-friendly
                $filename = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();

                // Simpan gambar ke storage/app/public/blog_images dengan nama yang sudah diubah
                 $imagePath = $image->storeAs('blog_images', $filename, 'public');

                Log::info('Image stored at: ' . $imagePath);
             }  else {
                Log::error('File upload failed: ' . $image->getErrorMessage());
                return back()->with('error', 'Upload gambar gagal. Silakan coba lagi.');
            }

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
            Storage::delete($dataBlog->image);
        }

        $dataBlog->delete();

        return redirect()->route('data_blogs.index')
            ->with('success', 'Data Blog berhasil dihapus.');
    }
}