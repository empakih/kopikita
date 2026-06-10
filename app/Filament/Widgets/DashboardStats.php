<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kelembapan Tanah', '45%')
                ->description('Optimal untuk fase vegetatif')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Suhu Lingkungan', '28°C')
                ->description('Stabil sejak pagi')
                ->descriptionIcon('heroicon-m-sun')
                ->color('warning'),
            Stat::make('Kadar Nutrisi', 'Baik')
                ->description('Nitrogen dan Fosfor seimbang')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('primary'),
        ];
    }
}
