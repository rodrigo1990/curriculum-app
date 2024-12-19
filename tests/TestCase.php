<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void{
        parent::setUp();
        Artisan::call('db:seed');
        Artisan::call('mongo:seed');
    }
}
