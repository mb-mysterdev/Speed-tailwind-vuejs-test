<?php

namespace App\Speedshopping\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAll()
    {
        Product::factory()->create(['product_name'=> 't-shirt']);
        $response = $this->get('/api/products');

        $response->assertStatus(200)
        ->assertJsonFragment([
            "product_name"=> "t-shirt",
        ]);
    }
}
