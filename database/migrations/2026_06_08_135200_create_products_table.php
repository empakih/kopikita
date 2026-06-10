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
            $table->string('name');
            $table->decimal('price', 15, 2)->nullable();
            $table->string('price_label')->nullable(); // misal: "Mulai dari $4,500" atau "$120/node"
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable(); // misal: "Kit Pertanian", "Jasa Pemasangan", "Pakan Peternakan"
            $table->boolean('is_bestseller')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
