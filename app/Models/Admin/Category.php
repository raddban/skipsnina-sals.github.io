<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function getAllCategories()
    {
        return Category::all();
    }

    public function deleteById($id)
    {
        return Category::where('id', $id)->delete();
    }
}
