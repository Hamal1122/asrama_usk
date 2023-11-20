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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('user_id');
            $table->ForeignId('kamar_id');
            $table->date('masa_tinggal');
            $table->date('tanggal_masuk');
            $table->string('bukti_pembayaran');
            $table->enum('status', ['0','1']); //0 = belum bayar, 1 = sudah bayar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
