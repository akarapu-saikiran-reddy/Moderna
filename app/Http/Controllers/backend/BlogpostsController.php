<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogposts;
use Illuminate\Http\Request;

class BlogpostsController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Blog');
    }
    public function create()
    {
        $blogposts = null;
        return view('pages.backend.blogposts.create', compact('blogposts'));
    }
    public function show($id)
    {
        $blogposts = Blogposts::find($id);

        return view('pages.backend.blogposts.view', compact('blogposts'));
    }

    public function edit($id)
    {

        $blogposts = Blogposts::find($id);

        return view('pages.backend.blogposts.edit', compact('blogposts'));
    }

    public function store(Request $request)
    {
        $image = new Blogposts();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/blogposts', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.blogposts')->with('image');
    }
    public function index()
    {
        $item = Blogposts::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.blogposts.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Blogposts::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/blogposts', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.blog');
    }
    public function delete($id)
    {
        $user = Blogposts::find($id);
        $user->delete();
        return redirect()->back();
    }
}
