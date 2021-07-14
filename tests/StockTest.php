<?php

use App\Models\Stock;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StockTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test to View All Products
     *
     * @return void
     */
    public function test_can_view_all_stocks()
    {

        $product = Stock::factory()->create();
        $response = $this->call('GET', '/api/stocks');
        $this->assertEquals(200, $response->status());

    }

}
