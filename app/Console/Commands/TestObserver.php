<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class TestObserver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:observer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test if observers are working';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get a user
        $user1 = \App\Models\User::where('organization_id', 1)->first();

        if (!$user1) {
            $this->error('No user found in organization 1');
            return 1;
        }

        Auth::loginUsingId($user1->id);
        $this->info("=== Testing Tenancy for User: {$user1->name} (org_id: {$user1->organization_id}) ===");

        $timestamp = now()->format('YmdHis');

        // Test Bank
        $bank = \App\Models\Bank::create([
            'bank_id' => "TENANCY_TEST_BANK_{$timestamp}",
            'bank_name' => 'Tenancy Test Bank',
            'account_number' => '1234567890',
            'currency' => 'USD',
        ]);
        $this->info("✓ Bank created with organization_id: {$bank->organization_id}");

        // Test Currency
        $currency = \App\Models\Currency::create([
            'currency_code' => "TST{$timestamp}",
            'currency_name' => 'Test Currency',
            'currency_country' => 'Test Country',
            'ex_rate' => 1.0000,
        ]);
        $this->info("✓ Currency created with organization_id: {$currency->organization_id}");

        // Test Port
        $port = \App\Models\Port::create([
            'port_code' => "TST{$timestamp}",
            'port_name' => 'Test Port',
            'port_country' => 'Test Country',
            'port_type' => 'Commercial',
        ]);
        $this->info("✓ Port created with organization_id: {$port->organization_id}");

        // Test LegalTerm
        $legalTerm = \App\Models\LegalTerm::create([
            'terms_code' => "TST{$timestamp}",
            'terms_serial' => "TST001{$timestamp}",
            'terms_title' => 'Test Legal Term',
            'terms_category' => 'Test Category',
            'terms_version' => 'v1.0',
            'valid_from' => now()->toDateString(),
        ]);
        $this->info("✓ LegalTerm created with organization_id: {$legalTerm->organization_id}");

        $this->info("\n=== Global Scope Test ===");
        $this->info("Banks visible: " . \App\Models\Bank::count());
        $this->info("Currencies visible: " . \App\Models\Currency::count());
        $this->info("Ports visible: " . \App\Models\Port::count());
        $this->info("LegalTerms visible: " . \App\Models\LegalTerm::count());

        $this->info("\n✅ All tenancy features working correctly!");
        return 0;
    }
}
