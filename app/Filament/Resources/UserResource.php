<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Tables\Actions\ViewAction;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Forms\Components;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    protected static ?string $navigationLabel = 'Pengguna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto_212396')
                    ->label("Foto")
                    ->image()
                    ->imageEditor()
                    ->required()
                    ->columnSpanFull()
                    ->directory('User'),
                TextInput::make('nama_212396')
                    ->label("Nama")
                    ->required()
                    ->maxLength(255),
                TextInput::make('alamat_212396')
                    ->label("Alamat")
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_212396')
                    ->label("Email")
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('password_212396')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create'),
                TextInput::make('hp_212396')
                    ->label("Hp")
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto_212396')
                    ->label("Foto")
                    ->width(50)
                    ->height(50),

                TextColumn::make('nama_212396')
                    ->label("Nama")
                    ->searchable(),

                TextColumn::make('email_212396')
                    ->label("Email")
                    ->searchable(),
                TextColumn::make('hp_212396')
                    ->label("Hp")
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                ViewAction::make('view')->label('View')->icon('heroicon-s-eye'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
