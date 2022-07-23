<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Dashboard');
    }
    public function index()
    {
        $contact = Contact::count('id');
        $blog = Blog::count('id');
        return view('pages.backend.dashboard', compact('contact', 'blog'));
    }
}
