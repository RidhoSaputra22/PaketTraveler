<?php

namespace App\Filament\Resources\FasilitasPaketResource\Pages;

use App\Filament\Resources\FasilitasPaketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasPaket extends EditRecord
{
    protected static string $resource = FasilitasPaketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
