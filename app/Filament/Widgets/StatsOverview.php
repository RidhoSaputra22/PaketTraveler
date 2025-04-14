<?php

namespace App\Filament\Widgets;

use App\Models\PaketTravel;
use App\Models\Transaksi;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {


        return [
            Stat::make('Jumlah Order', Transaksi::count() . " Paket")
                ->icon('heroicon-s-shopping-bag')
                ->description('Paket Terjual'),
            Stat::make('Total Pemasukan Hari ini', "Rp. " . number_format(Transaksi::where('total_harga_212396', '>', 0)->sum('total_harga_212396')))
                ->icon('heroicon-m-arrow-trending-up')
                ->description('Paket Terjual'),
            Stat::make('Jumlah Pengguna', User::count() . " Orang")
                ->icon('heroicon-s-users')
                ->description('Pengguna Terdaftar'),
        ];
    }
}
