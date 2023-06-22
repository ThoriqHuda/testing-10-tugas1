<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class CartTest extends TestCase
{
   
    public function test_example()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $cart = $this->post("/addcart/post",[
            'user_id' => $user->id,
            'product_id' => $product->id,
            'size' => 5,
            'amount' =>33
        ]);

        $this->assertDatabaseHas('carts', 
        ['user_id' => $user->id,
        'product_id' => $product->id,
        'size' => 5,
        'amount' =>33]);

    }
}
