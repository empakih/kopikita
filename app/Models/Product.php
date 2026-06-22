<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'price_label', 'description',
        'content', 'image', 'category', 'is_bestseller',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_bestseller' => 'boolean',
    ];

    // Harga siap tampil: pakai label manual bila ada, jika tidak format dari angka.
    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn () => $this->price_label
            ?: ($this->price !== null ? 'Rp ' . number_format($this->price, 0, ',', '.') : 'Hubungi kami'));
    }
}
