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
            [
                'id' => 1,
                'name' => 'Testing site',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Testing site',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);


        DB::table('bodies')->insert([
            'id' => 1,
            'site_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('headers')->insert([
            'id' => 1,
            'site_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('pages')->insert([
            [
                'id' => 1,
                'title' => 'Whoami',
                'slug' => 'whoami',
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Academics',
                'slug' => 'academics',
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Services',
                'slug' => 'services',
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Github',
                'slug' => 'github',
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Callme!',
                'slug' => 'callme',
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        DB::table('contents')->insert([
            [
                'id' => 1,
                'page_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'page_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'page_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'page_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'page_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        DB::table('buttons')->insert([
            [
                'id' => 1,
                'name' => 'Whoami',
                'page_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Academics',
                'page_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Services',
                'page_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Github',
                'page_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Callme!',
                'page_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        DB::table('buttons_header')->insert([
            [
                'button_id' => 5,
                'header_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);


        DB::table('buttons_body')->insert([
            [
                'button_id' => 1,
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'button_id' => 2,
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'button_id' => 3,
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'button_id' => 4,
                'body_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
