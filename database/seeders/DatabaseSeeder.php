<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        Role::factory()->create([
                'role' => 'admin',
                'storage_limit' => 21474836480
        ]);

        Role::factory()->create([
                'role' => 'user',
                'storage_limit' => 2147483648
        ]);

        User::factory()->withPersonalTeam()->create([
            'name' => 'Test',
            'surname' => 'User',
            'role_id' => 2,
            'email' => 'test@example.com',
        ]);
    }
}
