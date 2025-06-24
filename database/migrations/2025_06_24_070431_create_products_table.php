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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi')->unique();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->decimal('harga_perolehan', 15, 2);
            $table->string('mutasi_amal')->nullable();
            $table->string('mutasi_tujuan')->nullable();
            $table->date('tgl_pindah');
            $table->text('keterangan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
