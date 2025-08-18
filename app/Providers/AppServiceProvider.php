<?php

namespace App\Providers;

use App\Models\Bank;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\CustomerContact;
use App\Models\CustomerVessel;
use App\Models\LegalTerm;
use App\Models\Port;
use App\Models\Vendor;
use App\Models\VesselCertificate;
use App\Observers\BankObserver;
use App\Observers\CurrencyObserver;
use App\Observers\CustomerContactObserver;
use App\Observers\CustomerObserver;
use App\Observers\CustomerVesselObserver;
use App\Observers\LegalTermObserver;
use App\Observers\PortObserver;
use App\Observers\VendorObserver;
use App\Observers\VesselCertificateObserver;
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
        Customer::observe(CustomerObserver::class);
        CustomerContact::observe(CustomerContactObserver::class);
        CustomerVessel::observe(CustomerVesselObserver::class);
        VesselCertificate::observe(VesselCertificateObserver::class);
        Vendor::observe(VendorObserver::class);
    }
}
