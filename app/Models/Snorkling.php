<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snorkling extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_phone',
        'select_package',
        'destination',
        'person',
    ];

    //Tidak perlu relationship karena kita hanya menampilkan data, bukan berelasi langsung di database
}