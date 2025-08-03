<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms;

use App\Filament\Clusters\Organization\OrganizationCluster;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Pages\CreateLegalTerm;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Pages\EditLegalTerm;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Pages\ListLegalTerms;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Pages\ViewLegalTerm;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Schemas\LegalTermForm;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Schemas\LegalTermInfolist;
use App\Filament\Clusters\Organization\Resources\LegalTerms\Tables\LegalTermsTable;
use App\Models\LegalTerm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LegalTermResource extends Resource
{
    protected static ?string $model = LegalTerm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $cluster = OrganizationCluster::class;

    protected static ?string $recordTitleAttribute = 'terms_code';

    public static function form(Schema $schema): Schema
    {
        return LegalTermForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LegalTermInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LegalTermsTable::configure($table);
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
            'index' => ListLegalTerms::route('/'),
            'create' => CreateLegalTerm::route('/create'),
            'view' => ViewLegalTerm::route('/{record}'),
            'edit' => EditLegalTerm::route('/{record}/edit'),
        ];
    }
}
