<?php

namespace Database\Seeders;

use App\Models\Body;
use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;
use App\Models\Content;
use App\Models\Header;
use App\Models\Mongo\BodyStyles;
use App\Models\Mongo\ButtonsStyles;
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

        config(['database.connections.mongodb.database' => env('MONGO_DB')]);
        $n = DB::connection('mongodb')->getMongoDB()->dropCollection('body_styles');
        DB::connection('mongodb')->getMongoDB()->dropCollection('buttons_styles');


        $user = User::factory()->create(['username' => 'rodrigo1990']);

        $site = Site::factory()->for($user)->create();

        $body = Body::factory()->for($site)->create();
        $bodyStyles = new BodyStyles();
        $bodyStyles->id = $body->id;
        $bodyStyles->backgroundGradient = 'background-color:red;';
        $bodyStyles->created_at = now();
        $bodyStyles->updated_at = now();
        $bodyStyles->save();

        $pages = Page::factory()->count(5)->for($body)->create();

        foreach ($pages as $page) {
            Content::factory()->for($page)->create();
            $button = Button::factory()->for($page)->create();
            $buttonStyles = new ButtonsStyles();
            $buttonStyles->id = $button->id;
            $buttonStyles->fontFamily = 'Roboto-Thin';
            $buttonStyles->color = 'white';
            $buttonStyles->fontSize = '1.70rem';
            $buttonStyles->afterLineBackground = '#CC5F00';
            $buttonStyles->class = 'afterLine';
            $buttonStyles->updated_at = now();
            $buttonStyles->created_at = now();
            $buttonStyles->save();
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
