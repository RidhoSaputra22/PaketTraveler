<?php

namespace App\Filament\Resources\FasilitasPaketResource\Pages;

use App\Filament\Resources\FasilitasPaketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitasPakets extends ListRecords
{
    protected static string $resource = FasilitasPaketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
