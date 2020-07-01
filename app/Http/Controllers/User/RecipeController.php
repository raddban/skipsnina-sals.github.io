<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Recipe;
use App\Models\User\Comment;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index($id)
    {
        $com = new Comment();
        $comments = $com->getAllCommentsByDishId($id);
        $cat = new Category();
        $categories = $cat->getAllCategories();
        $single = new Recipe();
        $single_dish = $single->getSingleDishById($id);
        return view('user.partials.single-dish', compact('categories', 'single_dish', 'comments'));
    }

}
