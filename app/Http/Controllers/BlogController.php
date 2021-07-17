<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $com = Comment::all();
        $blog = Blog::all();
        return view('blog.index', compact('blog','com'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'blog' => 'required',
        ]);

        Blog::create($request->all());

        return redirect()->route('blog.index');
    }

    public function show(Blog $blog)
    {
        return view('blog.show',compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'blog' => 'required',
        ]);

        $blog->update($request->all());

        return redirect()->route('blog.index')
                        ->with('success','Post updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index')
                        ->with('success','Post deleted successfully');
    }

}

