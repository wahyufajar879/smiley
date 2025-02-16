<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRentMotorbike extends Model
{
    use HasFactory;

    protected $table = 'data_rent_motorbikes'; // Opsional, jika nama tabel berbeda dari konvensi
    protected $fillable = [
        'category_motorbike',
        'type_motorbike',
        'price',
    ];
}