<?php

namespace App\Filament\Resources\HomepageFeedbackResource\Pages;

use App\Filament\Resources\HomepageFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepageFeedback extends EditRecord
{
    protected static string $resource = HomepageFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
