<?php

namespace App\Filament\Resources\KingPayFAQResource\Pages;

use App\Filament\Resources\KingPayFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingPayFAQS extends ListRecords
{
    protected static string $resource = KingPayFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
