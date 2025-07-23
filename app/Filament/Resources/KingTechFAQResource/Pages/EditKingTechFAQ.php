<?php

namespace App\Filament\Resources\KingTechFAQResource\Pages;

use App\Filament\Resources\KingTechFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingTechFAQ extends EditRecord
{
    protected static string $resource = KingTechFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
