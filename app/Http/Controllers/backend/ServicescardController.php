<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Servicescard;
use Illuminate\Http\Request;

class ServicescardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Services');
    }
    public function create()
    {
        $servicescard = null;
        return view('pages.backend.servicescard.create', compact('servicescard'));
    }
    public function show($id)
    {
        $servicescard = Servicescard::find($id);

        return view('pages.backend.servicescard.view', compact('servicescard'));
    }

    public function edit($id)
    {
        $servicescard = Servicescard::find($id);
        return view('pages.backend.servicescard.edit', compact('servicescard'));
    }

    public function store(Request $request)
    {
        $image = new servicescard();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->logo = $request->logo;
        $image->save();
        return redirect()->route('admin.service-cards')->with('image');
    }
    public function index()
    {

        $item = Servicescard::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.servicescard.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Servicescard::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->logo = $request->logo;

        $image->update();
        return redirect()->route('admin.service-cards');
    }
    public function delete($id)
    {
        $user = Servicescard::find($id);
        $user->delete();
        return redirect()->back();
    }
}
