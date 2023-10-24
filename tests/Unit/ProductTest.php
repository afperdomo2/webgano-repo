<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_index_method_returns_view_with_all_products()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('products.index');
        $response->assertViewHas('products');
    }

    public function test_create_method_returns_view_create_new_product()
    {
        $response = $this->get('/products/create');

        $response->assertStatus(200);
        $response->assertViewIs('products.create');
    }

    public function test_store_method_creates_new_product_and_redirects_to_index_view()
    {
        $data = [
            'name' => 'Test Product',
            'price' => 10.99,
            'description' => 'This is a test product',
            'company' => 'Text Company',
            'image' => 'https://picsum.photos/150'
        ];

        $response = $this->post('/products', $data);

        $response->assertStatus(302);
        $response->assertRedirectContains('/products');
    }
}
