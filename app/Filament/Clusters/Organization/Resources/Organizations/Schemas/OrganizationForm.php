<?php

namespace App\Filament\Clusters\Organization\Resources\Organizations\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('org_name')
                    ->required(),
                TextInput::make('legal_name')
                    ->required(),
                TextInput::make('registration_number')
                    ->required(),
                TextInput::make('tax_number'),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('contact_person')
                    ->required(),
                TextInput::make('person_position'),
                TextInput::make('contact_number')
                    ->required(),
                TextInput::make('email_id')
                    ->email()
                    ->required(),
                Toggle::make('active_flag')
                    ->required(),
                TextInput::make('org_city')
                    ->required(),
                TextInput::make('org_country')
                    ->required(),
                DateTimePicker::make('creation_date')
                    ->required(),
                TextInput::make('created_by')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('last_modified_date')
                    ->required(),
                TextInput::make('last_modified_by')
                    ->required()
                    ->numeric(),
            ]);
    }
}
