<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['code' => 'USD', 'name' => 'US Dollar', 'country' => 'United States', 'rate' => 1.0000],
            ['code' => 'EUR', 'name' => 'Euro', 'country' => 'European Union', 'rate' => 0.8500],
            ['code' => 'GBP', 'name' => 'British Pound', 'country' => 'United Kingdom', 'rate' => 0.7500],
            ['code' => 'JPY', 'name' => 'Japanese Yen', 'country' => 'Japan', 'rate' => 110.0000],
            ['code' => 'AUD', 'name' => 'Australian Dollar', 'country' => 'Australia', 'rate' => 1.3500],
            ['code' => 'CAD', 'name' => 'Canadian Dollar', 'country' => 'Canada', 'rate' => 1.2500],
            ['code' => 'CHF', 'name' => 'Swiss Franc', 'country' => 'Switzerland', 'rate' => 0.9200],
            ['code' => 'CNY', 'name' => 'Chinese Yuan', 'country' => 'China', 'rate' => 6.4500],
        ];

        $organization = \App\Models\Organization::first();

        foreach ($currencies as $currency) {
            \App\Models\Currency::create([
                'organization_id' => $organization->id,
                'currency_code' => $currency['code'],
                'currency_name' => $currency['name'],
                'currency_country' => $currency['country'],
                'ex_rate' => $currency['rate'],
                'active_flag' => true,
            ]);
        }
    }
}
