<?php

namespace App\Filament\Resources\SeoFaqResource\Pages;

use App\Filament\Resources\SeoFaqResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeoFaq extends EditRecord
{
    protected static string $resource = SeoFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
