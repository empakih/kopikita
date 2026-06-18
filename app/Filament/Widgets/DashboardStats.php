<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Produk', Product::count())
                ->description('Jumlah produk di katalog')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('primary'),
            Stat::make('Produk Terlaris', Product::where('is_bestseller', true)->count())
                ->description('Produk yang ditandai best seller')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning'),
            Stat::make('Total Artikel', Article::count())
                ->description('Artikel blog yang dipublikasikan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),
        ];
    }
}
