<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        return phpinfo();
        return xdebug_info();
    }
}
