<?php

namespace App\Filament\Resources\GalleriResource\Pages;

use App\Filament\Resources\GalleriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleris extends ListRecords
{
    protected static string $resource = GalleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
