<?php

namespace App\Filament\Resources\KingPayFAQResource\Pages;

use App\Filament\Resources\KingPayFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingPayFAQ extends EditRecord
{
    protected static string $resource = KingPayFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
