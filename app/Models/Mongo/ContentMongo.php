<?php

namespace App\Models\Mongo;

use MongoDB\Laravel\Eloquent\Model;

class ContentMongo extends Model
{

    protected $connection = 'mongodb';
    protected $table = 'content';

}
