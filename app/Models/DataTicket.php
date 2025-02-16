<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTicket extends Model
{
    use HasFactory;

    protected $table = 'data_tickets'; // Opsional, jika nama tabel berbeda dari konvensi
    protected $fillable = [
        'type_fast_boot',
        'destination',
        'time',
        'price',
    ];
}