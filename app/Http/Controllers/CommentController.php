<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        return view('commentindex')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
    public function show(Comment $comment)
    {
        return view('commentshow')->with(['comment' => $comment]);
    }
    
    public function create()
    {
        return view('commentcreate');
    }
    
    public function store(CommentRequest $request, Comment $comment)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        return redirect('/comments/' . $comment->id);
    }
}
