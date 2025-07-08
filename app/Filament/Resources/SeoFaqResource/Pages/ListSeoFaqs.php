<?php

namespace App\Filament\Resources\SeoFaqResource\Pages;

use App\Filament\Resources\SeoFaqResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeoFaqs extends ListRecords
{
    protected static string $resource = SeoFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
