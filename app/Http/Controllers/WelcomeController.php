<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function index()
    {
        $profileUrls = [
          'twitter' => 'https://twitter.com/wesley_smits',
          'linkedIn' => 'https://www.linkedin.com/in/w-smits/',
          'github' => 'https://github.com/wsmits'
        ];

        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'profileUrls' => $profileUrls
        ]);
    }
}
