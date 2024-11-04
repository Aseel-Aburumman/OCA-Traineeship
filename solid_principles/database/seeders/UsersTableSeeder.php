<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        // Create additional users using a factory
        User::factory(4)->create(); // Creates 10 dummy users
    }
}
