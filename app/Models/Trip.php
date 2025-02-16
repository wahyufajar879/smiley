<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_phone',
        'type_vehicle',
        'people',
        'destination',
        'place_to_go',
    ];

    //Tidak perlu relationship karena kita hanya menampilkan data, bukan berelasi langsung di database
}