<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        \App\Models\Role::create([
            'name' => 'writer',
        ]);


        $permissions = [['name' => 'edit articles'], ['name' => 'delete articles']];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create($permission);
        }
    }
}
