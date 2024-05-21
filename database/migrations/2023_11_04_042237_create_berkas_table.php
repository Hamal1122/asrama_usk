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
            $table->enum('kategori',['KIP', 'Reguler', 'Internasional']);
            $table->string('nama_berkas');
            $table->enum('kategorigedung',['Laki-laki','Perempuan']);
            $table->string('jeniskamar');
            $table->bigInteger('harga');
            $table->enum('durasi',['1 tahun']);
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
