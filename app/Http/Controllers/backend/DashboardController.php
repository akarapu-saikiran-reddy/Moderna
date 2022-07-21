<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Dashboard');
    }
    public function index()
    {
        return view('pages.backend.dashboard');
    }
}
