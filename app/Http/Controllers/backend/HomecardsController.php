<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Homecards;
use Illuminate\Http\Request;

class HomecardsController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Homepage');
    }
    public function create()
    {
        $homecards = null;
        return view('pages.backend.homecards.create', compact('homecards'));
    }
    public function show($id)
    {
        $homecards = Homecards::find($id);

        return view('pages.backend.homecards.view', compact('homecards'));
    }

    public function edit($id)
    {

        $homecards = Homecards::find($id);

        return view('pages.backend.homecards.edit', compact('homecards'));
    }

    public function store(Request $request)
    {
        $image = new Homecards();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->logo = $request->logo;

        $image->save();
        return redirect()->route('admin.homecards')->with('image');
    }
    public function index()
    {
        $item = Homecards::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.homecards.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Homecards::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->logo = $request->logo;

        $image->update();
        return redirect()->route('admin.homecards');
    }
    public function delete($id)
    {
        $user = Homecards::find($id);
        $user->delete();
        return redirect()->back();
    }
}
