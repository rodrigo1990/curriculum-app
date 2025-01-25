<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends \Database\Seeders\Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        config(['database.connections.mongodb.database' => env('MONGO_DB')]);
        DB::connection('mongodb')->getMongoDB()->dropCollection('body_styles');
        DB::connection('mongodb')->getMongoDB()->dropCollection('buttons_styles');
        DB::connection('mongodb')->getMongoDB()->dropCollection('content');

        $user = User::factory()->create(['username' => 'rodrigo1990'])->get();
        $this->seedContent($user,'red','white');
    }
}
