<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function getNotFoundConditional(\Throwable $exception):bool
    {
        if(get_class($exception) == 'TypeError' && $exception->getCode() == 0)
            return true;
        else
            return false;
    }
}
