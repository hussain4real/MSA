<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomerVesselsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('organization.id')
                    ->searchable(),
                TextColumn::make('customer.id')
                    ->searchable(),
                TextColumn::make('vessel_code')
                    ->searchable(),
                TextColumn::make('vessel_short_code')
                    ->searchable(),
                TextColumn::make('vessel_name')
                    ->searchable(),
                TextColumn::make('imo_number')
                    ->searchable(),
                TextColumn::make('vessel_type')
                    ->searchable(),
                TextColumn::make('flag_state')
                    ->searchable(),
                TextColumn::make('gross_tonnage')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nett_tonnage')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('dead_wt')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('overall_length')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('beam')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('draft')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('year_built')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('classification_society')
                    ->searchable(),
                TextColumn::make('class_notation')
                    ->searchable(),
                TextColumn::make('vessel_operator')
                    ->searchable(),
                TextColumn::make('vessel_owner')
                    ->searchable(),
                TextColumn::make('vessel_manager')
                    ->searchable(),
                TextColumn::make('service_type')
                    ->searchable(),
                TextColumn::make('frequency')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
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
