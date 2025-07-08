<?php

namespace App\Filament\Resources\MetaDataResource\Pages;

use App\Filament\Resources\MetaDataResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMetaData extends CreateRecord
{
    protected static string $resource = MetaDataResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
