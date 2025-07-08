<?php

namespace App\Filament\Resources\WhyChooseUsReseourceResource\Pages;

use App\Filament\Resources\WhyChooseUsReseourceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWhyChooseUsReseource extends CreateRecord
{
    protected static string $resource = WhyChooseUsReseourceResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
