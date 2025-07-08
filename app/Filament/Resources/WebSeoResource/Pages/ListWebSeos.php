<?php

namespace App\Filament\Resources\WebSeoResource\Pages;

use App\Filament\Resources\WebSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebSeos extends ListRecords
{
    protected static string $resource = WebSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
