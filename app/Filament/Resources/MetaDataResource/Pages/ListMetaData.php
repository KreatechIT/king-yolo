<?php

namespace App\Filament\Resources\MetaDataResource\Pages;

use App\Filament\Resources\MetaDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetaData extends ListRecords
{
    protected static string $resource = MetaDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
