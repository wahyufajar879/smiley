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
        Schema::create('data_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('type_fast_boot');
            $table->string('destination');
            $table->string('time');
            $table->integer('price'); // Menyimpan harga dalam satuan terkecil (sen) untuk presisi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tickets');
    }
};