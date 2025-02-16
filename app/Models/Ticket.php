<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_phone',
        'destination',
        'select_boat',
        'tanggal',
        'time',
        'person',
    ];

    //Tidak perlu relationship karena kita hanya menampilkan data, bukan berelasi langsung di database
}