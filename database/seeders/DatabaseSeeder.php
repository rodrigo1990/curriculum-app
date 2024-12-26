<?php

namespace Database\Seeders;

use App\Models\Body;
use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;
use App\Models\Content;
use App\Models\Header;
use App\Models\Mongo\BodyStylesMongo;
use App\Models\Mongo\ButtonsStylesMongo;
use App\Models\Mongo\ContentMongo;
use App\Models\Page;
use App\Models\Site;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SiteFactory;
use Database\Factories\UserFactory;
use Faker\Factory;
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
        DB::connection('mongodb')->getMongoDB()->dropCollection('body_styles');
        DB::connection('mongodb')->getMongoDB()->dropCollection('buttons_styles');
        DB::connection('mongodb')->getMongoDB()->dropCollection('content');


        $user = User::factory()->create(['username' => 'rodrigo1990']);

        $site = Site::factory()->for($user)->create();

        $body = Body::factory()->for($site)->create();
        $bodyStyles = new BodyStylesMongo();
        $bodyStyles->id = $body->id;
        $bodyStyles->backgroundGradient = 'background-color:red;';
        $bodyStyles->created_at = now();
        $bodyStyles->updated_at = now();
        $bodyStyles->save();

        $pages = Page::factory()->count(5)->for($body)->create();

        foreach ($pages as $page) {

            $content = Content::factory()->for($page)->create();

            $contentMongo = new ContentMongo();
            $contentMongo->id = $content->id;
            $contentMongo->content = Factory::create()->randomHtml();
            $contentMongo->save();

            $button = Button::factory()->for($page)->create();
            $buttonStyles = new ButtonsStylesMongo();
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

        $pagesIds = $pages->pluck('id')->toArray();
        $buttonsBody = Button::where('id', '!=', $buttonHeader->id)
            ->whereIn('page_id', $pagesIds)
            ->get();
        foreach ($buttonsBody as $buttonBody) {
            ButtonBody::factory()->for($buttonBody)->for($body)->create();
        }

    }
}
