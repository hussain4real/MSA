<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies;

use App\Filament\Clusters\Organization\OrganizationCluster;
use App\Filament\Clusters\Organization\Resources\Currencies\Pages\CreateCurrency;
use App\Filament\Clusters\Organization\Resources\Currencies\Pages\EditCurrency;
use App\Filament\Clusters\Organization\Resources\Currencies\Pages\ListCurrencies;
use App\Filament\Clusters\Organization\Resources\Currencies\Pages\ViewCurrency;
use App\Filament\Clusters\Organization\Resources\Currencies\Schemas\CurrencyForm;
use App\Filament\Clusters\Organization\Resources\Currencies\Schemas\CurrencyInfolist;
use App\Filament\Clusters\Organization\Resources\Currencies\Tables\CurrenciesTable;
use App\Models\Currency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CurrencyResource extends Resource
{
    protected static ?string $model = Currency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Banknotes;

    protected static ?string $cluster = OrganizationCluster::class;

    protected static ?string $recordTitleAttribute = 'currency_name';

    public static function form(Schema $schema): Schema
    {
        return CurrencyForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CurrencyInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CurrenciesTable::configure($table);
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
            'index' => ListCurrencies::route('/'),
            'create' => CreateCurrency::route('/create'),
            'view' => ViewCurrency::route('/{record}'),
            'edit' => EditCurrency::route('/{record}/edit'),
        ];
    }
}
