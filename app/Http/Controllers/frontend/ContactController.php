<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $school = new Contact;

        $school->name = $request->name;
        $school->email = $request->email;
        $school->subject = $request->subject;
        $school->message = $request->message;
        $school->save();
        return redirect()->back()->with('success', 'form has been submitted successfully.');
    }
}
