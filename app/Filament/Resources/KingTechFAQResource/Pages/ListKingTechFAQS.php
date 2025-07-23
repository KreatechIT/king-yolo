<?php

namespace App\Filament\Resources\KingTechFAQResource\Pages;

use App\Filament\Resources\KingTechFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingTechFAQS extends ListRecords
{
    protected static string $resource = KingTechFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
