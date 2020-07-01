<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        $pic = new Recipe();
        $pictures = $pic->allPicFromRecipes();
        return view('user.partials.main', compact('categories', 'pictures'));
    }
}
