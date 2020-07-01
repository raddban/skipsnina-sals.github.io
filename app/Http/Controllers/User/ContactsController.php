<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\User\Message;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $cat = new Category();
        $categories = $cat->getAllCategories();
        return view('user.partials.contacts', compact('categories'));
    }

    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);
        return redirect()->back()->with('info', 'Paldies par Jūsu ziņu. Tuvākajā laikā ar Jums sazināsimies');
    }
}
