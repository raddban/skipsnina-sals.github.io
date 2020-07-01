<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function getAllMessages()
    {
        return Message::all();
    }

    public function getMessageById($id)
    {
        return Message::where('id', $id)->first();
    }

    public function deleteById($id)
    {
        return Message::where('id', $id)->delete();
    }
}
