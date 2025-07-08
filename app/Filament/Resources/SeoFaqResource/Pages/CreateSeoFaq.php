<?php

namespace App\Filament\Resources\SeoFaqResource\Pages;

use App\Filament\Resources\SeoFaqResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSeoFaq extends CreateRecord
{
    protected static string $resource = SeoFaqResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
