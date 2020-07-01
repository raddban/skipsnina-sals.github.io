<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contacts;
use App\Models\Admin\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContactsController extends Controller
{
    public function index()
    {
        return view('admin.partials.contacts');
    }

    public function save(Request $request)
    {

    }

    public function saveAboutMe(Request $request)
    {
        $this->validate($request,[
            'about_me' => 'required'
        ]);
        $file = $request->file('file');
        if (!empty($file))
        {
            $basename = Str::random();
            $original = $basename . '.' . $file->getClientOriginalExtension();
            Storage::put($original, file_get_contents($file));

            $about = new Contacts();
            $about->about_me = $request->input('about_me');
            $about->picture_path = $original;
            $about->save();
        }
        return redirect()->back();
    }
}
