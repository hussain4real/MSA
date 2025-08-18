<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Schemas;

use App\Enums\CertificateStatus;
use App\Enums\CertificateType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VesselCertificateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('organization_id')
                    ->relationship('organization', 'id')
                    ->required(),
                Select::make('vessel_id')
                    ->relationship('vessel', 'id')
                    ->required(),
                Select::make('certificate_type')
                    ->options(CertificateType::class)
                    ->required(),
                TextInput::make('certificate_ref'),
                TextInput::make('certificate_name')
                    ->required(),
                TextInput::make('issued_by'),
                DatePicker::make('issue_date'),
                DatePicker::make('expiry_date'),
                DatePicker::make('next_renewal'),
                Select::make('status')
                    ->options(CertificateStatus::class)
                    ->default('valid')
                    ->required(),
            ]);
    }
}
