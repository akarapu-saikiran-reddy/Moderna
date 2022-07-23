<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Contactus');
    }

    public function index()
    {

        $item = Contact::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.contactus.index', compact('item'));
    }
}
