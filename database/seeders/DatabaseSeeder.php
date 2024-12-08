<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Test User',
            'surname' => 'Reynoso',
            'username' => 'rodrigo1990',
            'email_verified_at' => now(),
            'password' => Hash::make('rodrigo1990'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'email' => 'test@example.com',
        ]);


        DB::table('sites')->insert([
            'id' => 1,
            'name' => 'Testing site',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
