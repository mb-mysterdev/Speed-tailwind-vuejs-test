<?php

namespace App\Speedshopping\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
