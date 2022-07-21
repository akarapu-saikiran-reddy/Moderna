<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Homesliders;
use Illuminate\Http\Request;

class HomeslidersController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Homepage');
    }
    public function create()
    {
        $homesliders = null;
        return view('pages.backend.homesliders.create', compact('homesliders'));
    }
    public function show($id)
    {
        $homesliders = Homesliders::find($id);

        return view('pages.backend.homesliders.view', compact('homesliders'));
    }

    public function edit($id)
    {

        $homeslider = Homesliders::find($id);

        return view('pages.backend.homesliders.edit', compact('homeslider'));
    }

    public function store(Request $request)
    {
        $image = new Homesliders();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->link = $request->link;

        $image->save();
        return redirect()->route('admin.homesliders')->with('image');
    }
    public function index()
    {
        $item = Homesliders::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.homesliders.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Homesliders::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->link = $request->link;

        $image->update();
        return redirect()->route('admin.homesliders');
    }
    public function delete($id)
    {
        $user = Homesliders::find($id);
        $user->delete();
        return redirect()->back();
    }
}
