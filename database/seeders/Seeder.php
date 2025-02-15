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
use App\Models\WorkingExperience;
use App\Models\AcademicExperience;
use Faker\Factory;
use Illuminate\Database\Eloquent\Collection;

abstract class Seeder extends \Illuminate\Database\Seeder
{
    protected function seedContent(Collection $users, string $mainColor, string $secondaryColor){
        foreach($users as $user){
            $site = Site::factory()->for($user)->create();
            $body = Body::factory()->for($site)->create();
            $bodyStyles = new BodyStylesMongo();
            $bodyStyles->id = $body->id;
            $bodyStyles->backgroundGradient = 'background-color:'.$mainColor.';';
            $bodyStyles->created_at = now();
            $bodyStyles->updated_at = now();
            $bodyStyles->save();
            $pages = Page::factory()->count(5)->for($body)->create(['default' => false]);

            foreach ($pages as $index =>  $page) {
                if($index === 1){
                    $page->default = true;
                    $page->update();
                }
                $content = Content::factory()->for($page)->create();

                $contentMongo = new ContentMongo();
                $contentMongo->id = $content->id;
                $contentMongo->content = Factory::create()->randomHtml();
                $contentMongo->color = $secondaryColor;
                $contentMongo->save();

                $button = Button::factory()->for($page)->create();
                $buttonStyles = new ButtonsStylesMongo();
                $buttonStyles->id = $button->id;
                $buttonStyles->fontFamily = 'Roboto-Thin';
                $buttonStyles->color = $secondaryColor;
                $buttonStyles->fontSize = '1.70rem';
                $buttonStyles->afterLineBackground = $secondaryColor;
                $buttonStyles->class = 'afterLine';
                $buttonStyles->updated_at = now();
                $buttonStyles->created_at = now();
                $buttonStyles->save();

                // Seed working experiences
                WorkingExperience::factory()->count(3)->for($user)->for($page)->create();

                // Seed academic experiences
                AcademicExperience::factory()->count(3)->for($user)->for($page)->create();
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
}