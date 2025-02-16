<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBlog extends Model
{
    use HasFactory;

    protected $table = 'data_blogs'; // Opsional, jika nama tabel berbeda dari konvensi
    protected $fillable = [
        'date',
        'title',
        'description',
        'category',
        'image',
    ];
}