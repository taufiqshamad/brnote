<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_if_authenticated_user_can_access_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response = $this->get('/');
        $response->assertStatus(200);
        $user->delete();
    }

    public function test_if_unauthenticated_user_cannot_access_dashboard()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }
}
