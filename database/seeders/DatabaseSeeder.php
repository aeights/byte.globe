<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
        [
            'name' => "Admin",
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ],
        [
            'name' => "User",
            'email' => 'user@mail.com',
            'password' => Hash::make('user'),
            'role' => 'user'
        ],
        ]);

        Category::insert([
        [
            'category' => "AI",
        ],
        [
            'category' => "Network",
        ],
        [
            'category' => "Programming",
        ],
        ]);

    }
}
