<?php

namespace App\Filament\Resources\KingMediaFeedbackResource\Pages;

use App\Filament\Resources\KingMediaFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingMediaFeedback extends ListRecords
{
    protected static string $resource = KingMediaFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
