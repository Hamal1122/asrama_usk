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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('user_id');
            $table->integer('status');
            $table->enum('kategori',['KIP', 'reguler', 'internasional']);
            $table->string('nama_berkas');
            $table->enum('kategorigedung',['laki-laki','perempuan']);
            $table->string('jeniskamar');
            $table->string('harga');
            $table->enum('durasi',['1tahun']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
