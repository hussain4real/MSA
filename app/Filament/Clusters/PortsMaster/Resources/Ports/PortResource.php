<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports;

use App\Filament\Clusters\PortsMaster\PortsMasterCluster;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Pages\CreatePort;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Pages\EditPort;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Pages\ListPorts;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Pages\ViewPort;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Schemas\PortForm;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Schemas\PortInfolist;
use App\Filament\Clusters\PortsMaster\Resources\Ports\Tables\PortsTable;
use App\Models\Port;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PortResource extends Resource
{
    protected static ?string $model = Port::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = PortsMasterCluster::class;

    protected static ?string $recordTitleAttribute = 'port_name';

    public static function form(Schema $schema): Schema
    {
        return PortForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PortInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPorts::route('/'),
            'create' => CreatePort::route('/create'),
            'view' => ViewPort::route('/{record}'),
            'edit' => EditPort::route('/{record}/edit'),
        ];
    }
}
