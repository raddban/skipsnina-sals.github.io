<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = new Message();
        $messages = $message->getAllMessages();
        return view('admin.partials.messages', compact('messages'));
    }

    public function readMail($id)
    {
        $message = new Message();
        $single = $message->getMessageById($id);
        return view('admin.partials.read-mail', compact('single'));
    }

    public function deleteMessage($id)
    {
        $delete = new Message();
        $delete->deleteById($id);
        return redirect()->back();
    }
}
