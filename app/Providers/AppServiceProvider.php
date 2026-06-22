<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Tanggal tampil dalam Bahasa Indonesia (mis. "22 Juni 2026").
        Carbon::setLocale('id');
    }
}
