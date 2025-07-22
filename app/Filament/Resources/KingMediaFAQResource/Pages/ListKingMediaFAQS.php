<?php

namespace App\Filament\Resources\KingMediaFAQResource\Pages;

use App\Filament\Resources\KingMediaFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingMediaFAQS extends ListRecords
{
    protected static string $resource = KingMediaFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
