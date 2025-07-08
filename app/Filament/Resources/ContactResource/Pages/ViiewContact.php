<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    public function mount($record): void
    {
        parent::mount($record);
        
        // Update the `is_read` field to true
        if (!$this->record->is_read) {
            $this->record->is_read = true;
            $this->record->save();
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('goBack')
            ->label('Back to Index')
            ->url($this->getResource()::getUrl('index')) // URL to the index page
            ->color('warning'), // You can change the color as needed
        ];
    }
}