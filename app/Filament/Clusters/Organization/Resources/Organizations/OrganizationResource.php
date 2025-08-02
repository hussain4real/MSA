<?php

namespace App\Filament\Clusters\Organization\Resources\Organizations;

use App\Filament\Clusters\Organization\OrganizationCluster;
use App\Filament\Clusters\Organization\Resources\Organizations\Pages\CreateOrganization;
use App\Filament\Clusters\Organization\Resources\Organizations\Pages\EditOrganization;
use App\Filament\Clusters\Organization\Resources\Organizations\Pages\ListOrganizations;
use App\Filament\Clusters\Organization\Resources\Organizations\Pages\ViewOrganization;
use App\Filament\Clusters\Organization\Resources\Organizations\Schemas\OrganizationForm;
use App\Filament\Clusters\Organization\Resources\Organizations\Schemas\OrganizationInfolist;
use App\Filament\Clusters\Organization\Resources\Organizations\Tables\OrganizationsTable;
use App\Models\Organization;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrganizationResource extends Resource
{
    protected static ?string $model = Organization::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = OrganizationCluster::class;

    protected static ?string $recordTitleAttribute = 'org_name';

    public static function form(Schema $schema): Schema
    {
        return OrganizationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrganizationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrganizationsTable::configure($table);
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
            'index' => ListOrganizations::route('/'),
            'create' => CreateOrganization::route('/create'),
            'view' => ViewOrganization::route('/{record}'),
            'edit' => EditOrganization::route('/{record}/edit'),
        ];
    }
}
