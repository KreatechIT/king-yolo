<?php

namespace App\Filament\Resources\WhyChooseUsReseourceResource\Pages;

use App\Filament\Resources\WhyChooseUsReseourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhyChooseUsReseources extends ListRecords
{
    protected static string $resource = WhyChooseUsReseourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
