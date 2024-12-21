<?php

namespace Database\Seeders;

use App\Models\Body;
use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;
use App\Models\Content;
use App\Models\Header;
use App\Models\Page;
use App\Models\Site;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SiteFactory;
use Database\Factories\UserFactory;
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

        $user = User::factory()->create(['username' => 'rodrigo1990']);

        $site = Site::factory()->for($user)->create();

        $body = Body::factory()->for($site)->create();

        $pages = Page::factory()->count(5)->for($body)->create();

        foreach ($pages as $page) {
            Content::factory()->for($page)->create();
            Button::factory()->for($page)->create();
        }
        $header = Header::factory()->for($site)->create();

        $buttonHeader = Button::orderBy('id','desc')->first();
        ButtonHeader::factory()->for($buttonHeader)->for($header)->create();

        $buttonsBody = Button::where('id', '!=', $buttonHeader->id)->get();
        foreach ($buttonsBody as $buttonBody) {
            ButtonBody::factory()->for($buttonBody)->for($body)->create();
        }

    }
}
