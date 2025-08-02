<?php

namespace App\Filament\Clusters\Organization\Resources\Banks;

use App\Filament\Clusters\Organization\OrganizationCluster;
use App\Filament\Clusters\Organization\Resources\Banks\Pages\CreateBank;
use App\Filament\Clusters\Organization\Resources\Banks\Pages\EditBank;
use App\Filament\Clusters\Organization\Resources\Banks\Pages\ListBanks;
use App\Filament\Clusters\Organization\Resources\Banks\Pages\ViewBank;
use App\Filament\Clusters\Organization\Resources\Banks\Schemas\BankForm;
use App\Filament\Clusters\Organization\Resources\Banks\Schemas\BankInfolist;
use App\Filament\Clusters\Organization\Resources\Banks\Tables\BanksTable;
use App\Models\Bank;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BankResource extends Resource
{
    protected static ?string $model = Bank::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = OrganizationCluster::class;

    protected static ?string $recordTitleAttribute = 'bank_name';

    public static function form(Schema $schema): Schema
    {
        return BankForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BankInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BanksTable::configure($table);
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
            'index' => ListBanks::route('/'),
            'create' => CreateBank::route('/create'),
            'view' => ViewBank::route('/{record}'),
            'edit' => EditBank::route('/{record}/edit'),
        ];
    }
}
