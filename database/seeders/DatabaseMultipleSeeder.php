<?php

namespace Database\Seeders;

use App\Models\User;

class DatabaseMultipleSeeder extends \Database\Seeders\Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(50)->create();
        $this->seedContent($users,'white','black');
    }
}
