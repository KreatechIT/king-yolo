<?php

namespace App\Filament\Resources\HomepageFeedbackResource\Pages;

use App\Filament\Resources\HomepageFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepageFeedback extends ListRecords
{
    protected static string $resource = HomepageFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
