<?php

namespace App\Http\Controllers;

use App\Models\SiteStyles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $styles = SiteStyles::get();
        return view('site_styles', [
            'styles' => $styles
        ]);
    }
}
