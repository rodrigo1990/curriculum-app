<?php

namespace Database\Seeders;

use App\Models\Body;
use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;
use App\Models\Content;
use App\Models\CurriculumUserData;
use App\Models\Experience;
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

            $pages = Page::factory()->count(4)->for($body)->create(['default' => false]);

            $buttons = [
                'Academics' => null,
                'Working Experience' => null,
                'Contact' => null,
                'Call me!' => null,
            ];

            foreach ($pages as $index => $page) {
                if($index === 1){
                    $page->default = true;
                    $page->update();
                }
                $buttonName = array_keys($buttons)[$index];
                $button = Button::factory()->for($page)->create(['name' => $buttonName]);
                $buttons[$buttonName] = $button;



                $content = Content::factory()->for($page)->create();

                $contentMongo = new ContentMongo();
                $contentMongo->id = $content->id;
                $contentMongo->color = $secondaryColor;

                if ($buttonName == 'Academics') {
                    $experience = Experience::factory()->for($site)->for($page)->create();
                    AcademicExperience::factory()->for($experience)->create();
                    $contentMongo->content = 'Academic Experiences';
                } elseif ($buttonName == 'Working Experience') {
                    $experience = Experience::factory()->for($site)->for($page)->create();
                    WorkingExperience::factory()->for($experience)->create();
                    $contentMongo->content = 'Working Experiences';
                } else {
                    $contentMongo->content = Factory::create()->randomHtml();
                }

                $contentMongo->save();
            }

            $header = Header::factory()->for($site)->create();
            $buttonHeader = Button::factory()->for($page)->create(['name' => 'Call me!']);
            ButtonHeader::factory()->for($buttonHeader)->for($header)->create();

            $buttonStyles = new ButtonsStylesMongo();
            $buttonStyles->id = $buttonHeader->id;
            $buttonStyles->fontFamily = 'Roboto-Thin';
            $buttonStyles->color = $secondaryColor;
            $buttonStyles->fontSize = '1.70rem';
            $buttonStyles->afterLineBackground = $secondaryColor;
            $buttonStyles->class = 'afterLine';
            $buttonStyles->updated_at = now();
            $buttonStyles->created_at = now();
            $buttonStyles->save();


            foreach ($buttons as $button) {
                ButtonBody::factory()->for($button)->for($body)->create();
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
            }

            CurriculumUserData::factory()->for($site)->create();

        }
    }
}