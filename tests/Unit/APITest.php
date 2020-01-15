<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class APITest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testUserInvite()
    {
        $response = $this->json('POST', '/api/auth/invite', [
            'first_name' => 'John',
            'last_name' => 'Demo',
            'email' => str_random(10).'@demo.com',
            'role_id' => '3',
        ]);

        $response->assertStatus(200)->assertJsonStructure([
            'success' => ['token', 'name']
        ]);
    }

    public function testUserLogin()
    {
        $response = $this->json('POST', '/api/auth/login', [
            'email' => 'demo@demo.com',
            'password' => 'secret'
        ]);

        $response->assertStatus(200)->assertJsonStructure([
            'success' => ['token']
        ]);
    }

    public function testUserFetch()
    {
        $user = \App\User::find(1);

        $response = $this->actingAs($user, 'api')
            ->json('GET', '/api/auth/user')
            ->assertStatus(200)->assertJsonStructure([
                    '*' => [
                        'id',
                        'first_name',
                        'last_name',
                        'other_name',
                        'created_at',
                        'updated_at',
                        'deleted_at'
                    ]
                ]
            );
    }
}
