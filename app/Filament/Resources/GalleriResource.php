<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleriResource\Pages;
use App\Filament\Resources\GalleriResource\RelationManagers;
use App\Models\Galleri;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleriResource extends Resource
{
    protected static ?string $model = Galleri::class;

    protected static ?string $navigationIcon = 'heroicon-s-photo';

    protected static ?string $navigationGroup = 'Paket Travel';
    protected static ?string $navigationLabel = 'Galleri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('paket.nama_212396')
                    ->relationship('paket', 'nama_212396')
                    ->searchable()
                    ->required(),
                    Forms\Components\FileUpload::make('path_212396')
                    ->label("Gambar")
                    ->directory("Galleri/{$form->getRecord()->paket->id}")
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('path_212396')
                    ->label("Gambar")
                    ->width(50)
                    ->height(50)
                    ->wrap(),
                Tables\Columns\TextColumn::make('paket.nama_212396')
                    ->label("Nama Paket")
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->groups([
                'paket.nama_212396',
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_from'),
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGalleris::route('/'),
            'create' => Pages\CreateGalleri::route('/create'),
            'edit' => Pages\EditGalleri::route('/{record}/edit'),
        ];
    }
}
