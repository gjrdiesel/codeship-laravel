<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_basic_usage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_uses_the_database()
    {
        $user = factory(User::class)->create();
        $this->assertNotNull($user);
    }
}
