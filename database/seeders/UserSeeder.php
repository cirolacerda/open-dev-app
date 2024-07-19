<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@teste.com',
            'role_id' => RoleEnum::ADMIN
        ]);

        User::factory()->create([
            'name' => 'CTO',
            'email' => 'cto@teste.com',
            'role_id' => RoleEnum::CTO
        ]);

        User::factory()->create([
            'name' => 'Assistant',
            'email' => 'assistant@teste.com',
            'role_id' => RoleEnum::ASSISTANT
        ]);
    }
}
