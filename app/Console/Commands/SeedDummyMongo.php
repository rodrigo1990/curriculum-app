<?php

namespace App\Console\Commands;

use App\Models\BodyStyles;
use App\Models\ButtonsBodyStyles;
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

        $buttonsBodyStyles = new ButtonsBodyStyles();
        DB::connection('mongodb')->getMongoDB()->dropCollection($buttonsBodyStyles->getTable());
        $buttonsBodyStyles->id = 1;
        $buttonsBodyStyles->fontFamily = 'Roboto-Thin';
        $buttonsBodyStyles->color = 'White';
        $buttonsBodyStyles->fontSize = '1.70rem';
        $buttonsBodyStyles->afterLineBackground = '#CC5F00';
        $buttonsBodyStyles->class = 'afterLine';
        $buttonsBodyStyles->save();
    }
}
