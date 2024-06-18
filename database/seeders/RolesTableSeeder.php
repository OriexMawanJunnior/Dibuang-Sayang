<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'buyer']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'seller']);
    }
}