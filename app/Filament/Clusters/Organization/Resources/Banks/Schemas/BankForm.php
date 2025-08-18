<?php

namespace App\Filament\Clusters\Organization\Resources\Banks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BankForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('org_id')
                    ->required()
                    ->numeric(),
                TextInput::make('bank_id')
                    ->required(),
                TextInput::make('bank_name')
                    ->required(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('account_number')
                    ->required(),
                TextInput::make('iban_number'),
                TextInput::make('swift_code'),
                TextInput::make('type'),
                TextInput::make('currency')
                    ->required(),
                Toggle::make('active_flag')
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
