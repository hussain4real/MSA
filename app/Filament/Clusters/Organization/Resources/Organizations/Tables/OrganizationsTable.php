<?php

namespace App\Filament\Clusters\Organization\Resources\Organizations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrganizationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('org_name')
                    ->searchable(),
                TextColumn::make('legal_name')
                    ->searchable(),
                TextColumn::make('registration_number')
                    ->searchable(),
                TextColumn::make('tax_number')
                    ->searchable(),
                TextColumn::make('contact_person')
                    ->searchable(),
                TextColumn::make('person_position')
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->searchable(),
                TextColumn::make('email_id')
                    ->searchable(),
                IconColumn::make('active_flag')
                    ->boolean(),
                TextColumn::make('org_city')
                    ->searchable(),
                TextColumn::make('org_country')
                    ->searchable(),
                TextColumn::make('creation_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('last_modified_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('last_modified_by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
