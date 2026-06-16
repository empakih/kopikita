<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    /**
     * Seed the application's hero slider table.
     */
    public function run(): void
    {
        if (HeroSlide::count() > 0) {
            return; // jangan duplikat jika sudah ada data
        }

        HeroSlide::insert([
            [
                'title' => 'Perkebunan selada segar di greenhouse',
                'image' => 'https://plus.unsplash.com/premium_photo-1661963367713-b85abde75a23?auto=format&fit=crop&w=1600&q=80',
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Keluarga petani di greenhouse hidroponik',
                'image' => 'https://plus.unsplash.com/premium_photo-1667509304967-317a5dd29660?auto=format&fit=crop&w=1600&q=80',
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Greenhouse penuh tanaman hijau',
                'image' => 'https://images.unsplash.com/photo-1727099079513-952d40de9d78?auto=format&fit=crop&w=1600&q=80',
                'order_index' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
