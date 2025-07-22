<?php

namespace App\Filament\Resources\KingPayFeedbackResource\Pages;

use App\Filament\Resources\KingPayFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKingPayFeedback extends EditRecord
{
    protected static string $resource = KingPayFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
