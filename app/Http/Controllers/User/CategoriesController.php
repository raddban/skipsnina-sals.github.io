<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Recipe;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id)
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        $rec = new Recipe();
        $recipes = $rec->getRecipesByCategorySlug($id);
        return view('user.partials.category', compact('recipes', 'categories'));
    }
}
