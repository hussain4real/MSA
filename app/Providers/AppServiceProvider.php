<?php

namespace App\Providers;

use App\Models\Bank;
use App\Models\Currency;
use App\Models\LegalTerm;
use App\Models\Port;
use App\Observers\BankObserver;
use App\Observers\CurrencyObserver;
use App\Observers\LegalTermObserver;
use App\Observers\PortObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register observers for automatic organization_id assignment
        Bank::observe(BankObserver::class);
        Currency::observe(CurrencyObserver::class);
        LegalTerm::observe(LegalTermObserver::class);
        Port::observe(PortObserver::class);
    }
}
