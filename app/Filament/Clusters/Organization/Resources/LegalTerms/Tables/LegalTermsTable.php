<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LegalTermsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('org_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('terms_code')
                    ->searchable(),
                TextColumn::make('terms_serial')
                    ->searchable(),
                TextColumn::make('terms_title')
                    ->searchable(),
                TextColumn::make('terms_category')
                    ->searchable(),
                TextColumn::make('terms_version')
                    ->searchable(),
                TextColumn::make('valid_from')
                    ->date()
                    ->sortable(),
                TextColumn::make('valid_to')
                    ->date()
                    ->sortable(),
                IconColumn::make('active_flag')
                    ->boolean(),
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
