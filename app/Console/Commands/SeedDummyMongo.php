<?php

namespace App\Console\Commands;

use App\Models\Mongo\BodyStyles;
use App\Models\Mongo\ButtonsStyles;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedDummyMongo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mongo:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed dummy data for Mongo db';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        config(['database.connections.mongodb.database' => env('MONGO_DB')]);
        $site = new BodyStyles();
        $n = DB::connection('mongodb')->getMongoDB()->dropCollection($site->getTable());
        $site->id = 1;
        $site->backgroundGradient = "background-color: red;";
        $site->save();

        $buttonsBodyStyles = new ButtonsStyles();
        DB::connection('mongodb')->getMongoDB()->dropCollection($buttonsBodyStyles->getTable());
        $buttonsBodyStyles->id = 1;
        $buttonsBodyStyles->fontFamily = 'Roboto-Thin';
        $buttonsBodyStyles->color = 'White';
        $buttonsBodyStyles->fontSize = '1.70rem';
        $buttonsBodyStyles->afterLineBackground = '#CC5F00';
        $buttonsBodyStyles->class = 'afterLine';
        $buttonsBodyStyles->save();

        $buttonsBodyStyles2 = new ButtonsStyles();
        $buttonsBodyStyles2->id = 2;
        $buttonsBodyStyles2->fontFamily = 'Roboto-Thin';
        $buttonsBodyStyles2->color = 'White';
        $buttonsBodyStyles2->fontSize = '1.70rem';
        $buttonsBodyStyles2->afterLineBackground = '#CC5F00';
        $buttonsBodyStyles2->class = 'afterLine';
        $buttonsBodyStyles2->save();
        $buttonsBodyStyles3 = new ButtonsStyles();
        $buttonsBodyStyles3->id = 3;
        $buttonsBodyStyles3->fontFamily = 'Roboto-Thin';
        $buttonsBodyStyles3->color = 'White';
        $buttonsBodyStyles3->fontSize = '1.70rem';
        $buttonsBodyStyles3->afterLineBackground = '#CC5F00';
        $buttonsBodyStyles3->class = 'afterLine';
        $buttonsBodyStyles3->save();
        $buttonsBodyStyles4 = new ButtonsStyles();
        $buttonsBodyStyles4->id = 4;
        $buttonsBodyStyles4->fontFamily = 'Roboto-Thin';
        $buttonsBodyStyles4->color = 'White';
        $buttonsBodyStyles4->fontSize = '1.70rem';
        $buttonsBodyStyles4->afterLineBackground = '#CC5F00';
        $buttonsBodyStyles4->class = 'afterLine';

        $buttonsBodyStyles4->save();
    }
}
