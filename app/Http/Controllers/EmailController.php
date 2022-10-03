<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class EmailController extends Controller
{
    public function index()
    {
        return Inertia::render('Email/Index');
    }
}
