<?php

namespace App\Filament\Resources\KingBotFAQResource\Pages;

use App\Filament\Resources\KingBotFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingBotFAQS extends ListRecords
{
    protected static string $resource = KingBotFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
