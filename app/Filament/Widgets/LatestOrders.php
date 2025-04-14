<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\TransaksiResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{

    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(TransaksiResource::getEloquentQuery())
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Transaksi')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('paket.nama_212396')
                    ->label('Paket')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.nama_212396')
                    ->label('User')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_orang_212396')
                    ->label('Jumlah Orang')
                    ->numeric()
                    ->suffix(" Orang")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_harga_212396')
                    ->prefix("Rp. ")
                    ->label('Total Harga')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status_212396')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'success' => 'Success',
                        'failed' => 'Failed',
                    ])
                    ->sortable()
                    ->searchable()
                    ->selectablePlaceholder(false)
                    ->rules(['required']),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->groups([
                'paket.nama_212396',

            ]);
    }
}
