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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('nama');              // Nama pemesan
        $table->string('no_hp');             // Nomor HP / WhatsApp
        $table->date('tanggal');             // Tanggal booking
        $table->time('jam');               // Jam booking (misal: 10:00 atau 10:00 - 12:00)
        $table->text('catatan')->nullable(); // Catatan opsional
        $table->string('status')->default('menunggu'); // menunggu / selesai / batal
        $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};