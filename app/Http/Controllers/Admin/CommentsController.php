<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Recipe;
use App\Models\User\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $com = new Comment();
        $comments = $com->getAllComments();
        return view('admin.partials.comments', compact('comments'));
    }

    public function deleteComment($id)
    {
        $comment = new Comment();
        $comment->deleteById($id);
        return redirect()->back();
    }
}
