<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Home;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        view()->share('title', 'Homepage');
    }

    public function create()
    {
        $home = null;
        return view('pages.backend.homepage.create', compact('home'));
    }
    public function show($id)
    {
        $home = Home::find($id);

        return view('pages.backend.homepage.view', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::find($id);

        return view('pages.backend.homepage.edit', compact('home'));
    }

    public function store(Request $request)
    {
        $image = new Home();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/homepage', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.homepage')->with('image');
    }
    public function index()
    {
        $home = Home::orderBy('id', 'asc')->paginate(10);
        $feature = Feature::orderBy('id', 'asc')->paginate(10);
        $slider = Slider::orderBy('id', 'asc')->paginate(10);
        return view('pages.backend.homepage.index', compact('home', 'feature', 'slider'));
    }

    public function update(Request $request, $id)
    {
        $image = Home::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/homepage', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.homepage');
    }
    public function delete($id)
    {
        $user = Home::find($id);
        $user->delete();
        return redirect()->back();
    }
}
