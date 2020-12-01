<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function testRouteToStart()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
}
