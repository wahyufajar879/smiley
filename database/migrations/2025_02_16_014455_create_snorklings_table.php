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
        Schema::create('snorklings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_phone');
            $table->string('select_package'); // Menyimpan nama package (Sharing/Private)
            $table->string('destination');  // Menyimpan nama destination
            $table->integer('person');       // Jumlah orang (Pax)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snorklings');
    }
};