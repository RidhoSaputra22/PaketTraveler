<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketTravelResource\Pages;
use App\Filament\Resources\PaketTravelResource\RelationManagers;
use App\Filament\Resources\PaketTravelResource\RelationManagers\FasilitasRelationManager;
use App\Filament\Resources\PaketTravelResource\RelationManagers\GalleriRelationManager;
use App\Models\Galleri;
use App\Models\PaketTravel;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class PaketTravelResource extends Resource
{
    protected static ?string $model = PaketTravel::class;

    protected static ?string $navigationIcon = 'heroicon-s-globe-asia-australia';

    protected static ?string $navigationGroup = 'Paket Travel';
    protected static ?string $navigationLabel = 'Paket Travel';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail_212396')
                    ->label("Thumbnail")
                    ->directory('PakteTravel')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->deletable(true)
                    ->imageEditor()
                    ->live(),
                Forms\Components\TextInput::make('nama_212396')
                    ->label("Nama Paket")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasi_212396')
                    ->label('Lokasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi_212396')
                    ->label("Deskripsi")
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('tanggal_berangkat_212396')
                    ->label('Tanggal Berangkat')
                    ->required()
                    ->minDate(now()->format('Y-m-d'))
                    ->afterStateUpdated(function (string $state, Forms\Set $set, Forms\Get $get) {
                        $tanggal = Carbon::parse($state);
                        $durasi = $get('durasi_212396') - 1;
                        $set('tanggal_pulang_212396', $tanggal->addDays($durasi)->format('Y-m-d'));

                    })
                    ->live(),
                Forms\Components\DatePicker::make('tanggal_pulang_212396')
                    ->label('Tanggal Pulang')
                    ->required()
                    ->minDate(now()->format('Y-m-d'))
                    ->afterStateUpdated(function (string $state, Forms\Set $set, Forms\Get $get) {
                        $durasi = Carbon::parse($state)->subDays(Carbon::parse($get('tanggal_berangkat_212396'))->day)->day + 1;
                        $set('durasi_212396', $durasi);
                    })
                    ->live(),

                Forms\Components\TextInput::make('durasi_212396')
                    ->label('Durasi Keberangkatan')
                    ->numeric()
                    ->suffix("Hari")
                    ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(function (int $state, Forms\Set $set, Forms\Get $get) {
                        $tanggal = Carbon::parse($get('tanggal_berangkat_212396'));
                        $durasi = $state;
                        $set('tanggal_pulang_212396', $tanggal->addDays($durasi)->format('Y-m-d'));
                        // dump($durasi);
                    })
                    ->live(),
                Forms\Components\TextInput::make('harga_212396')
                    ->label("Harga")
                    ->prefix('Rp. ')
                    ->suffix(' / orang')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('rating_212396')
                    ->label('Rating')
                    ->options([
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐',
                        4 => '⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                    ])
                    ->selectablePlaceholder()
                    ->required(),
                Forms\Components\Select::make('kategori')
                    ->label('Kategori')
                    ->required()
                    ->relationship('kategori', 'kategori_212396')
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_kategori_212396')
                    ->label('ID')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('thumbnail_212396')
                    ->label('Thumbnail')
                    ->width(50)
                    ->height(50),
                Tables\Columns\TextColumn::make('nama_212396')
                    ->label("Nama")
                    ->searchable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_212396')
                    ->label('Harga')
                    ->prefix("Rp. ")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi_212396')
                    ->label('Lokasi')
                    ->searchable()
                    ->searchable(),
                Tables\Columns\SelectColumn::make('rating_212396')
                    ->label('Rating')
                    ->options([
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐',
                        4 => '⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                    ])
                    ->selectablePlaceholder(false)
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori.kategori_212396')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_berangkat_212396')
                    ->label('Tanggal Berangkat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('tanggal_pulang_212396')
                    ->label('Tanggal Pulang')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\ViewAction::make('view')->label('View')->icon('heroicon-s-eye'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (PaketTravel $record) {
                        // delete single
                        if ($record['thumbnail_212396']) {
                            Storage::disk('public')->delete($record['thumbnail_212396']);
                        }

                        // delete multiple
                        if ($record->galleri) {
                            foreach ($record->galleri as $ph) Storage::disk('Galleri')->delete($ph);
                        }
                    })
                ,
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
            FasilitasRelationManager::class,
            GalleriRelationManager::class,

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaketTravel::route('/'),
            'create' => Pages\CreatePaketTravel::route('/create'),
            'edit' => Pages\EditPaketTravel::route('/{record}/edit'),
        ];
    }
}
