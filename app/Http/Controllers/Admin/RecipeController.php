<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    public function getRecipes()
    {
        $rec = new Recipe();
        $recipes = $rec->getAllRecipes();
        return view('admin.partials.recipes', compact('recipes'));
    }

    public function addNewRecipe()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        return view('admin.partials.add-new-recipe', compact('categories'));
    }

    public function saveNewRecipe(Request $request)
    {
//        var_dump($request->all());die;
        $this->validate($request,[
            'title' => 'required|min:5',
            'ingredients' => 'required|min:3',
            'category' => 'required',
            'recipe' => 'required|min:20',
        ]);
        $file = $request->file('file');
        if (!empty($file))
        {
            $basename = Str::random();
            $original = $basename . '.' . $file->getClientOriginalExtension();
            Storage::put($original, file_get_contents($file));

            Recipe::create([
                'title' => $request->input('title'),
                'ingredients' => $request->input('ingredients'),
                'category_id' => $request->input('category'),
                'description' => $request->input('recipe'),
                'picture_path' => $original
            ]);
        }
        return redirect()->route('admin.recipes')->with('info', 'Recepte saglabāta');
    }

    public function deleteRecipe($id)
    {
        $delete = new Recipe();
        $delete->deleteById($id);
        return redirect()->back();
    }
}
