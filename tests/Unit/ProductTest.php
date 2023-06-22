<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ProductTest extends TestCase
{
    
    public function test_create_product()
    {
        Storage::fake('public');


        $product = [
            'name' => 'Jordan 2',
            'category' => 'Jordan',
            'price' => '60000',
            'file' => $file = UploadedFile::fake()->image('post.jpeg')
          ];

        $response = $this->post('/additem/post', $product);

        array_splice($product,3, 1);
        
  
        $this->assertDatabaseHas('products', $product);
    }
}
