<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Blog');
    }
    public function create()
    {

        $blog = null;
        return view('pages.backend.blog.create', compact('blog'));
    }
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('pages.backend.blog.view', compact('blog'));
    }

    public function edit($id)
    {

        $blog = Blog::find($id);

        return view('pages.backend.blog.edit', compact('blog'));
    }

    public function store(Request $request)
    {

        $image = new Blog();
        $image->title = $request->title;
        $image->link = $request->link;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/blog', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.blogs')->with('image');
    }
    public function index()
    {
        $item = Blog::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.blog.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Blog::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/blog', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.blogs');
    }
    public function delete($id)
    {
        $user = Blog::find($id);
        $user->delete();
        return redirect()->back();
    }
}
