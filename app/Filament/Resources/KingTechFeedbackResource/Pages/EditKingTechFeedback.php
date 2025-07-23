<?php

namespace App\Filament\Resources\KingTechFeedbackResource\Pages;

use App\Filament\Resources\KingTechFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingTechFeedback extends EditRecord
{
    protected static string $resource = KingTechFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
