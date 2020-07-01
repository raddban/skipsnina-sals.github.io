<?php

namespace App\Models\Admin;

use App\Models\User\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    protected $fillable = ['title', 'ingredients', 'category_id', 'description', 'picture_path'];

    public function getAllRecipes()
    {
        return Recipe::paginate(2);
    }

    public function getRecipesByCategorySlug($id)
    {
        return Recipe::where('category_id', $id)->get();
    }

    public function getSingleDishById($id)
    {
        return Recipe::where('id', $id)->first();
    }

    public function getDishFromCommentTable()
    {
        return Comment::all('recipe_title');
    }

    public function deleteById($id)
    {
        return Recipe::where('id', $id)->delete();
    }

    public function allPicFromRecipes()
    {
        return Recipe::all('picture_path');
    }
}
