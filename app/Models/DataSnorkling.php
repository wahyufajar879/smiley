<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSnorkling extends Model
{
    use HasFactory;

    protected $table = 'data_snorklings'; // Opsional, jika nama tabel berbeda dari konvensi
    protected $fillable = [
        'type_package',
        'destination',
        'price',
    ];
}