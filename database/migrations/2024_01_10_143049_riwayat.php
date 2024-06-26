<?php

use GuzzleHttp\Psr7\DroppingStream;
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
        Schema::create('riwayat', function(Blueprint $table){
            $table->id();
            $table->ForeignId('user_id');
            $table->ForeignId('kamar_id');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->string('harga');
            $table->string('jeniskamar');
            $table->enum('durasi',['1tahun']);
            $table->enum('kategori',['KIP', 'reguler', 'internasional']);
            $table->integer('status'); //0 =menunggu, 1 =aktif 2= riwayat/expired
            $table->string('nomor_resi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
