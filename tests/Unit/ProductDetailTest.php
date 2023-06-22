<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductDetailTest extends TestCase
{
   
    public function test_example()
    {
        $product = Product::factory()->create();

        $this->post("/formdetail/post", 
        ['id' => $product->id,
        'size' => 33,
        'stock' => 10,
        ]);

         $this->assertDatabaseHas('productdetails', 
         ['product_id' => $product->id,
         'size' => 33,
         'stock' => 10,
         ]);
        
    }
}
