<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('port_code')
                    ->searchable(),
                TextColumn::make('port_name')
                    ->searchable(),
                TextColumn::make('port_country')
                    ->searchable(),
                TextColumn::make('port_type')
                    ->searchable(),
                TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('time_zone')
                    ->searchable(),
                TextColumn::make('vessel_size')
                    ->searchable(),
                TextColumn::make('max_draft')
                    ->numeric()
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
