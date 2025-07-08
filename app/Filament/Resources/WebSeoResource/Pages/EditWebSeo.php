<?php

namespace App\Filament\Resources\WebSeoResource\Pages;

use App\Filament\Resources\WebSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebSeo extends EditRecord
{
    protected static string $resource = WebSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
