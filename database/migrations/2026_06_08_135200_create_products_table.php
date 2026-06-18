<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                                 // nama produk, mis. "Biji Kopi Arabika Gayo 200g"
            $table->decimal('price', 15, 2)->nullable();            // harga angka, mis. 65000
            $table->string('price_label')->nullable();              // label harga yang ditampilkan, mis. "Rp 65.000"
            $table->text('description')->nullable();                // deskripsi singkat (kartu katalog)
            $table->longText('content')->nullable();                // detail panjang (halaman detail produk)
            $table->string('image')->nullable();                    // path gambar di storage
            $table->string('category')->nullable();                 // mis. "Biji Kopi", "Alat Seduh", "Grinder", "Mesin"
            $table->boolean('is_bestseller')->default(false);       // tandai produk terlaris
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
