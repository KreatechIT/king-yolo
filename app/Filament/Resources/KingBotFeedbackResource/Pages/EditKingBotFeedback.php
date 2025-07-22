<?php

namespace App\Filament\Resources\KingBotFeedbackResource\Pages;

use App\Filament\Resources\KingBotFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingBotFeedback extends EditRecord
{
    protected static string $resource = KingBotFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
