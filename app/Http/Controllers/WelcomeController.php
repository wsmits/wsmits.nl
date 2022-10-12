<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function index()
    {
        $pageBlocks = [
//            'portfolio',
//            'skills',
//            'about',
//            'keywords',
//            'work',
//            'statistics',
//            'blog',
//            'contact',
//            'map',
//            'email'
        ];

        $showFooter = true;
        $showNotificationBar = false;

        $profileUrls = [
          'twitter' => 'https://twitter.com/wesley_smits',
          'linkedIn' => 'https://www.linkedin.com/in/w-smits/',
          'github' => 'https://github.com/wsmits'
        ];

        $videoUrl = URL::asset('assets/img/bg-lines.mp4');

        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'profileUrls' => $profileUrls,
            'videoUrl' => $videoUrl,
            'pageBlocks' => $pageBlocks,
            'showFooter' => $showFooter,
            'showNotificationBar' => $showNotificationBar
        ]);
    }
}
