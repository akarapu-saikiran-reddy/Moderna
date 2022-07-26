<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Features');
    }
    public function create()
    {
        $features = null;
        return view('pages.backend.features.create', compact('features'));
    }
    public function show($id)
    {
        $features = Feature::find($id);

        return view('pages.backend.features.view', compact('features'));
    }

    public function edit($id)
    {

        $features = Feature::find($id);

        return view('pages.backend.features.edit', compact('features'));
    }

    public function store(Request $request)
    {
        $image = new Feature();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->image = $request->image;
        $image->save();
        return redirect()->route('admin.features')->with('image');
    }
    public function index()
    {
        $item = Feature::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.features.index', compact('item'));
    }
    public function update(Request $request, $id)
    {
        $image = Feature::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->image = $request->image;
        $image->update();
        return redirect()->route('admin.features');
    }
    public function delete($id)
    {
        $user = Feature::find($id);
        $user->delete();
        return redirect()->back();
    }
}
