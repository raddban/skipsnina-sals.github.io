<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Contacts;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        $blog = Contacts::first();
        return view('user.partials.about-me', compact('categories', 'blog'));
    }
}
