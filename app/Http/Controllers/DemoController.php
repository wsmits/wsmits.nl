<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

class DemoController extends Controller
{
    public function worldmap()
    {
        return view('demo.worldmap', []);
    }

    public function europemap()
    {
        return view('demo.europemap', []);
    }
}
