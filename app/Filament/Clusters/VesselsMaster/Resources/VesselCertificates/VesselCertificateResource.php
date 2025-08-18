<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates;

use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages\CreateVesselCertificate;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages\EditVesselCertificate;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages\ListVesselCertificates;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages\ViewVesselCertificate;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Schemas\VesselCertificateForm;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Schemas\VesselCertificateInfolist;
use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Tables\VesselCertificatesTable;
use App\Filament\Clusters\VesselsMaster\VesselsMasterCluster;
use App\Models\VesselCertificate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VesselCertificateResource extends Resource
{
    protected static ?string $model = VesselCertificate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentCheck;

    protected static ?string $cluster = VesselsMasterCluster::class;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return VesselCertificateForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VesselCertificateInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VesselCertificatesTable::configure($table);
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
            'index' => ListVesselCertificates::route('/'),
            'create' => CreateVesselCertificate::route('/create'),
            'view' => ViewVesselCertificate::route('/{record}'),
            'edit' => EditVesselCertificate::route('/{record}/edit'),
        ];
    }
}
