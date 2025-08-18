<?php

namespace App\Filament\Clusters\VesselsMaster;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class VesselsMasterCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = 'lucide-ship-wheel';
}
