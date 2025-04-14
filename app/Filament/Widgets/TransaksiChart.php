<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class TransaksiChart extends ChartWidget
{
    protected static ?string $heading = 'Transaksi Harian';
    protected static ?string $maxHeight = '300px';
    public ?string $filter = 'today';

    // protected int | string | array $columnSpan = 'full';
    protected function getData(): array
    {
        $activeFilter = $this->filter;

        $data = Trend::model(Transaksi::class);

        switch ($activeFilter) {
            case 'today':
                $data = $data->between(now()->startOfDay(), now()->endOfDay())->perHour();
                break;
            case 'week':
                $data = $data->between(now()->startOfWeek(), now()->endOfWeek())->perDay();
                break;
            case 'month':
                $data = $data->between(now()->startOfMonth(), now()->endOfMonth())->perDay();
                break;
            case 'year':
                $data = $data->between(now()->startOfYear(), now()->endOfYear())->perMonth();
                break;
            default:
                $data = $data->between(now()->startOfDay(), now()->endOfDay())->perHour();
                break;
        }


        $data = $data->count();

        return [
            'datasets' => [
                [
                    'label' => 'Transaksi',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => ($activeFilter == "today" ? $data->map(fn (TrendValue $value) => Carbon::parse($value->date)->format('H:i')) : $data->map(fn (TrendValue $value) => $value->date)),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hari ini',
            'week' => 'Minggu ini',
            'month' => 'Bulan ini',
            'year' => 'Tahun ini',
        ];
    }
}
