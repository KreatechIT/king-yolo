<?php

namespace App\Filament\Resources\KingPayFeedbackResource\Pages;

use App\Filament\Resources\KingPayFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKingPayFeedback extends ListRecords
{
    protected static string $resource = KingPayFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
