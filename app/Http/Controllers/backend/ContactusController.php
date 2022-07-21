<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Contactus');
    }
    public function create()
    {
        $contactus = null;
        return view('pages.backend.contactus.create', compact('contactus'));
    }
    public function show($id)
    {
        $contactus = Contactus::find($id);

        return view('pages.backend.contactus.view', compact('contactus'));
    }

    public function edit($id)
    {

        $contactus = Contactus::find($id);

        return view('pages.backend.contactus.edit', compact('contactus'));
    }

    public function store(Request $request)
    {
        $image = new Contactus();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/contactus', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.contactus')->with('image');
    }
    public function index()
    {

        $item = Contactus::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.contactus.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Contactus::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/contactus', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.contactus');
    }
    public function delete($id)
    {
        $user = Contactus::find($id);
        $user->delete();
        return redirect()->back();
    }
}
