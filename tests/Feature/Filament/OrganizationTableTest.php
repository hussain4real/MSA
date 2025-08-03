<?php

use App\Filament\Clusters\Organization\Resources\Organizations\Pages\ListOrganizations;
use App\Models\User;

use function Pest\Livewire\livewire;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    $user = User::factory()->create();

    $this->actingAs($user);
});

it('can render page', function () {
    livewire(ListOrganizations::class)
        ->assertSuccessful();
});

// test('can load the page', function () {
//     $users = User::factory()->count(5)->create();
//     livewire(ListOrganizations::class)
//         ->assertOk()
//         ->assertCanSeeTableRecords($users);
// });
