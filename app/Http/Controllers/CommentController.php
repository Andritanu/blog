<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;

class CommentController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        $com = Comment::all();
        return view('comment.index', compact('com', 'blog'));
    }

    public function create()
    {
        $blog = Blog::all();
        return view('comment.create', compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_blog' => 'required',
            'comment' => 'required',
        ]);

        Comment::create($request->all());

        return redirect()->route('blog.index');
    }


    public function show(Comment $com)
    {
        $blog = Blog::all();
        return view('comment.show',compact('com', 'blog'));
    }

    public function edit(Comment $com)
    {
        $blog = Blog::all();
        return view('comment.edit',compact('com','blog'));
    }

    public function update(Request $request, Comment $com)
    {
        $request->validate([
            'id_blog' => 'required',
            'comment' => 'required',
        ]);

        $com->update($request->all());

        return redirect()->route('comment.index')
                        ->with('success','Post updated successfully');
    }

    public function destroy(Comment $com)
    {
        $com->delete();

        return redirect()->route('comment.index')
                        ->with('success','Post deleted successfully');
    }

}
