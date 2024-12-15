<?php

namespace App\Console\Commands;

use App\Models\SiteStyles;
use Illuminate\Console\Command;

class SeedDummyMongo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-dummy-mongo';

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
        $site = new SiteStyles();
        $site->id = 1;
        $site->backgroundGradient = "background-color: red;";
        $site->save();
    }
}
