<?php

namespace App\Filament\Resources\SettingsResource\Pages;

use App\Filament\Resources\SettingsResource;
use Filament\Resources\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Card;
use App\Models\Settings;
use Filament\Forms\Components\Repeater;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomEditSettings extends Page
{
    protected static string $resource = SettingsResource::class;

    protected static string $view = 'filament.resources.settings-resource.pages.custom-edit-settings';

    public ?array $data = [];

    public $record;

    public $settings;

    public function mount($record): void
    {
        $this->record = $record;
        $settings = Settings::findOrFail($record);

        $this->data = [
            'id' => $settings->id,
            'group' => $settings->group,
            'name' => $settings->name,
            'payload_type' => $settings->payload_type,
            'payload_text'=> $settings->payload_type == 'text' ? $settings->payload : null,
            'payload_image'=> $settings->payload_type == 'image' ? (array)$settings->payload : null,
        ];
    }

    public function getTitle(): string
    {
        return 'Edit Settings';
    }

   

    public function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Group::make()->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('group')
                        ->label('Group')
                        ->options(function () {
                            return Settings::query()->distinct()->pluck('group', 'group')->toArray();
                        })
                        ->searchable()
                        ->reactive(),
                    
                    Forms\Components\TextInput::make('group')
                        ->label('New Group (optional)')
                        ->placeholder('Enter a new group name if it doesn\'t exist')
                        ->reactive(),
                    
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->label('Name'),
                    
                    Forms\Components\Textarea::make('payload_text')
                        ->label('Payload (Text)')
                        ->required(fn($get) => $get('payload_type') === 'text')
                        ->visible(fn($get) => $get('payload_type') === 'text'),

                    Forms\Components\FileUpload::make('payload_image')
                        ->disk('local')
                        ->label('Payload (Image)')
                        ->imageEditor()
                        ->downloadable()
                        ->required(fn($get) => $get('payload_type') === 'image')
                        ->visible(fn($get) => $get('payload_type') === 'image')
                ]),
            ]),
        ])->statePath('data');
    }

    public function submitForm()
    {
        $data = $this->form->getState();

        // Ensure all values are strings
        $data = array_map(function ($value) {
            return is_string($value) ? trim($value) : $value;
        }, $data);

        // Begin a transaction to ensure all or nothing happens
        DB::beginTransaction();

        try {
            $settings = Settings::findOrFail($this->record);

            $settings->update([
                'group' => $data['group'],
                'name' => $data['name'],
                'payload' => $settings->payload_type == 'text' ? $data['payload_text'] :  $data['payload_image'],
                'group' => $data['group'],
            ]);
            
            DB::commit();

            Notification::make()
                ->title('Settings updated successfully.')
                ->success()
                ->send();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);

            Notification::make()
                ->title('Error while updating settings.')
                ->danger()
                ->send();
        }
    }

}