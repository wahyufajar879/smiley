<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_blogs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('image')->nullable(); // Simpan nama file gambar, bisa null jika tidak ada gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_blogs');
    }
};