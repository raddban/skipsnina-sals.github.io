<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|min:6|email',
            'message' => 'required|min:5',
        ]);
        Comment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'recipe_title' => $request->input('recipe_title'),
            'recipe_id' => $request->input('recipe_id')
        ]);
        return redirect()->back();
    }

}
