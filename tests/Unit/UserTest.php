<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    
    public function test_create_user()
    {
        $user = [
            'name' => 'Thoriq Huda',
            'email' => 'm.th0rihudaaaaa@gmail.com',
            'password' => 'passwordtest'
          ];

        $response = $this->post('/signup/post', $user);


        array_splice($user,2, 1);

        $this->assertDatabaseHas('users', $user);
    }
}
