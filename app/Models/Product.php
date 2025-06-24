<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaksi',
        'kode_barang',
        'nama_barang',
        'merk',
        'type',
        'harga_perolehan',
        'mutasi_amal',
        'mutasi_tujuan',
        'tgl_pindah',
        'keterangan',
    ];

    protected $casts = [
        'tgl_pindah' => 'date',
        'harga_perolehan' => 'decimal:2',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            $lastProduct = self::latest('id')->first();
            $lastNumber = $lastProduct ? (int) substr($lastProduct->no_transaksi, 0) : 0;

            $newNumber = $lastNumber + 1;

            $product->no_transaksi = Str::padLeft($newNumber, 6, '0');

            $attempts = 0;
            while (self::where('no_transaksi', $product->no_transaksi)->exists()) {
                $newNumber++;
                $product->no_transaksi = Str::padLeft($newNumber, 6, '0');
                $attempts++;
                if ($attempts > 100) {
                    throw new \Exception("Could not generate unique transaction number after multiple attempts.");
                }
            }
        });
    }
}
