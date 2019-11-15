<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    private $_productService;

    protected function setUp() : void
    {
        parent::setUp();
        $this->_productService = $this->app->make('App\Services\IProductService');
    }

    public function test_GetTotalProductCount_ProductExists_ReturnsCorrectProduc()
    {
        // arrange
        $expectedCount = 5;

        // act
        $count = $this->_productService->getTotalProductCount();

        // assert
        $this->assertEquals($expectedCount, $count);
    }

    
}