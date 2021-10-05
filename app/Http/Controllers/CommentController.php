<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        return view('comment.index')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
    public function show(Comment $comment)
    {
        return view('comment.show')->with(['comment' => $comment]);
    }
    
    public function create()
    {
        return view('comment.create');
    }
    
    public function store(Comment $comment, CommentRequest $request)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        return redirect('/comments/' . $comment->id);
    }

    public function edit(Comment $comment)
    {
        return view('comment.edit')->with(['comment' => $comment]);
    }
    
    public function update(CommentRequest $request, Comment $comment)
    {
        $input_comment = $request['comment'];
        $comment->fill($input_comment)->save();
        return redirect('/comments/' . $comment->id);
    }
    
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('/comments');
    }
}
