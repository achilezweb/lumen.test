<?php

use App\Models\Product;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test to View All Products
     *
     * @return void
     */
    public function test_can_view_all_products()
    {

        $product = Product::factory()->create();
        $response = $this->call('GET', '/api/products');
        $this->assertEquals(200, $response->status());

    }

    /**
     * Test to Create a New Product
     *
     * @return void
     */
    public function test_can_create_product()
    {

        $formData = [
            'code' => '11111',
            'name' => 'product01',
            'description' => 'this is a description',
        ];
        $response = $this->json('POST', '/api/products', $formData);

        $response->seeJson([
                        'status' => 'success',
                     ])
                     ->seeJsonEquals([
                        'message' => 'Product created successfully',
                        'status' => 'success',
                     ]);

    }

    /**
     * Test can Show the Product
     *
     * @return void
     */
    public function test_can_show_the_product()
    {

        $product = Product::factory()->create();
        $response = $this->call('GET', '/api/products/'.$product->id);
        $this->assertEquals(200, $response->status());

    }

    /**
     * Test can Update the Product
     *
     * @return void
     */
    public function test_can_update_the_product()
    {

        $product = Product::factory()->create();

        $formData = [
            'code' => 'Changed',
            'name' => 'Changed',
            'description' => 'Changed',
        ];
        $response = $this->json('PUT', '/api/products/'.$product->id, $formData);

        $response->seeJson([
                        'status' => 'success',
                     ])
                     ->seeJsonEquals([
                        'message' => 'Product updated successfully',
                        'status' => 'success',
                     ]);

    }


    /**
     * Test can Delete the Product
     *
     * @return void
     */
    public function test_can_delete_the_product()
    {

        $product = Product::factory()->create();
        $response = $this->json('DELETE', '/api/products/'.$product->id, []);

        $response->seeJson([
                        'status' => 'success',
                     ])
                     ->seeJsonEquals([
                        'message' => 'Product deleted successfully',
                        'status' => 'success',
                     ]);

    }

}
