<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Sliders');
    }
    public function create()
    {
        $homesliders = null;
        return view('pages.backend.sliders.create', compact('homesliders'));
    }
    public function show($id)
    {
        $homesliders = Slider::find($id);

        return view('pages.backend.sliders.view', compact('homesliders'));
    }

    public function edit($id)
    {

        $homeslider = Slider::find($id);

        return view('pages.backend.sliders.edit', compact('homeslider'));
    }

    public function store(Request $request)
    {
        $image = new Slider();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->link = $request->link;

        $image->save();
        return redirect()->route('admin.sliders')->with('image');
    }
    public function index()
    {
        $item = Slider::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.sliders.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Slider::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->link = $request->link;

        $image->update();
        return redirect()->route('admin.Slider');
    }
    public function delete($id)
    {
        $user = Slider::find($id);
        $user->delete();
        return redirect()->back();
    }
}
