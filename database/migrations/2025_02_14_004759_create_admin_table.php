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
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // Kolom ID (primary key, auto-increment)
            $table->string('name'); // Kolom nama lengkap
            $table->string('email')->unique(); // Kolom email (harus unik)
            $table->string('password'); // Kolom password (akan di-hash)
            $table->timestamp('email_verified_at')->nullable(); // Kolom verifikasi email (bisa null)
            $table->rememberToken(); // Untuk fitur "remember me"
            $table->timestamps(); // Kolom created_at dan updated_at (waktu pembuatan dan pembaruan)
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
