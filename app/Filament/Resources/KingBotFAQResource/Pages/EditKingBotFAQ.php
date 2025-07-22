<?php

namespace App\Filament\Resources\KingBotFAQResource\Pages;

use App\Filament\Resources\KingBotFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingBotFAQ extends EditRecord
{
    protected static string $resource = KingBotFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
