<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTrip extends Model
{
    use HasFactory;

    protected $table = 'data_trips'; // Opsional, jika nama tabel berbeda dari konvensi
    protected $fillable = [
        'type_vehicle',
        'destination',
        'place_to_go',
        'price',
    ];
}