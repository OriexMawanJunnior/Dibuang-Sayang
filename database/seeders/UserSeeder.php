<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::Create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Change to a more secure password
        ]);
        $adminUser->assignRole('admin');

        // Create Seller User
        $sellerUser = User::Create([
            'name' => 'Seller User',
            'email' => 'seller@example.com',
            'password' => bcrypt('password'), // Change to a more secure password
        ]);
        $sellerUser->assignRole('seller');
    }
}
