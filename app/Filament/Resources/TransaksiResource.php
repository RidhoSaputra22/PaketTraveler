<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Filament\Resources\TransaksiResource\Widgets\TransaksiChart;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-s-shopping-bag';

    protected static ?string $navigationLabel = 'Transaksi';

    public static function getNavigationBadge(): ?string {
        return static::getModel()::where('status_212396', 'pending')->count();
    }

    public static function getNavigationBadgeColor(): ?string {
        return static::getModel()::where('status_212396', 'pending')->count() > 5 ? 'warning' : 'success';
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('paket.nama_212396')
                    ->label('Paket')
                    ->relationship('paket', 'nama_212396')
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('user.nama_212396')
                    ->label('User')
                    ->relationship('user', 'nama_212396')
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('status_212396')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'success' => 'Success',
                        'failed' => 'Failed',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('kode_212396')
                    ->label('Kode')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('kode_midtrans_212396')
                    ->label('Kode Midtrans')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('jumlah_orang_212396')
                    ->label('Jumlah Orang')
                    ->suffix(" Orang")
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_harga_212396')
                    ->label('Total Harga')
                    ->prefix("Rp. ")
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paket.nama_212396')
                    ->label('Paket')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.nama_212396')
                    ->label('User')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_orang_212396')
                    ->label('Jumlah Orang')
                    ->numeric()
                    ->suffix(" Orang")
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_harga_212396')
                    ->prefix("Rp. ")
                    ->label('Total Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\SelectColumn::make('status_212396')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'success' => 'Success',
                        'failed' => 'Failed',
                    ])
                    ->sortable()
                    ->selectablePlaceholder(false)
                    ->rules(['required']),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            // 'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
