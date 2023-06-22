<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class EditUserTest extends TestCase
{
    
    public function test_edit_user()
    {
    $user = User::factory()->create();
    
    $this->actingAs($user)->post("/editprofile/post", 
    ['name' => 'ThoriqHuda',
    'email' => 'testemail@gmail.com',
    'phone' => '08113545627',
    'address' => 'Jl. Kalisari Utara I No.60',
    'postalcode' => 62111 ],
    );

    $this->assertDatabaseHas('users', ['name' => 'ThoriqHuda', 'email' => 'testemail@gmail.com']);

    }
}
