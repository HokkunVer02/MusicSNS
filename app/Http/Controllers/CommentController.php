<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        return view('commentindex')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
    public function show(Comment $comment)
    {
        return view ('commentshow')->with(['comment' => $comment]);
    }
}
