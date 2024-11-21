<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Mohammad',
            'last_name' => 'Zrar',
            'email' => 'test@example.com',
            'admin' => true,
        ]);

        $this->call(JobSeeder::class);
    }
}
