<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasPaketResource\Pages;
use App\Filament\Resources\FasilitasPaketResource\RelationManagers;
use App\Filament\Resources\FasilitasPaketResource\RelationManagers\PaketRelationManager;
use App\Models\FasilitasPaket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FasilitasPaketResource extends Resource
{
    protected static ?string $model = FasilitasPaket::class;

    protected static ?string $navigationIcon = 'heroicon-s-numbered-list';

    protected static ?string $navigationGroup = 'Paket Travel';
    protected static ?string $navigationLabel = 'Fasilitas';
    protected static ?int $navigationsort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_paket_212396')
                    ->label('Paket')
                    ->required()
                    ->relationship('paket', 'nama_212396')
                    ->searchable(),
                Forms\Components\TextInput::make('fasilitas_212396')
                    ->label('Fasilitas')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_fasilitas_212396')
                    ->label('ID')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('paket.nama_212396')
                    ->label('Paket')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fasilitas_212396')
                    ->label('Fasilitas')
                    ->searchable(),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFasilitasPakets::route('/'),
            'create' => Pages\CreateFasilitasPaket::route('/create'),
            'edit' => Pages\EditFasilitasPaket::route('/{record}/edit'),
        ];
    }
}
