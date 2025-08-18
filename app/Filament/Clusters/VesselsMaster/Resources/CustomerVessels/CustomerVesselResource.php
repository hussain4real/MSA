<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels;

use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages\CreateCustomerVessel;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages\EditCustomerVessel;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages\ListCustomerVessels;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages\ViewCustomerVessel;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Schemas\CustomerVesselForm;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Schemas\CustomerVesselInfolist;
use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Tables\CustomerVesselsTable;
use App\Filament\Clusters\VesselsMaster\VesselsMasterCluster;
use App\Models\CustomerVessel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CustomerVesselResource extends Resource
{
    protected static ?string $model = CustomerVessel::class;

    protected static string|BackedEnum|null $navigationIcon = 'lucide-ship';

    protected static ?string $cluster = VesselsMasterCluster::class;

    protected static ?string $recordTitleAttribute = 'vessel_code';

    public static function form(Schema $schema): Schema
    {
        return CustomerVesselForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CustomerVesselInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerVesselsTable::configure($table);
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
            'index' => ListCustomerVessels::route('/'),
            'create' => CreateCustomerVessel::route('/create'),
            'view' => ViewCustomerVessel::route('/{record}'),
            'edit' => EditCustomerVessel::route('/{record}/edit'),
        ];
    }
}
