<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class EditProductTest extends TestCase
{
    public function test_edit_product()
    {
        
        $product = Product::factory()->create();
        $num = $product->id;
        
        $this->post("/edititem/post", 
        ['name' => 'Jordan 4',
        'category' => 'Jordan',
        'price' => '120000',
        'id' => $num,
        'file' => $file = UploadedFile::fake()->image('post4.jpeg') ],
        );
      
        $this->assertDatabaseHas('products', ['name' => 'Jordan 4', 'category' => 'Jordan']);
    }
}
