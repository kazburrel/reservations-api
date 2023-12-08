<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingsTest extends TestCase
{
    use RefreshDatabase;

    // public function test_user_has_access_to_bookings_feature()
    // {
    //     $user = User::factory()->create()->assignRole(Role::ROLE_USER);
    //     $response = $this->actingAs($user)->getJson('/api/user/bookings');

    //     $response->assertStatus(200);
    // }

    public function test_property_owner_does_not_have_access_to_bookings_feature()
    {
        $role = '9abeda15-4078-4fc1-845d-c427b55f898a';
        $allRoles = Role::where('id', $role)->first();
        dd($allRoles);
        $owner = User::factory()->create(['role_id' => Role::ROLE_OWNER]);
        $response = $this->actingAs($owner)->getJson('/api/user/bookings');

        $response->assertStatus(403);
    }
}
