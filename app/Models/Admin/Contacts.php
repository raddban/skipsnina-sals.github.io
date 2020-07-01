<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = ['about_me', 'email', 'phone_number', 'picture_path'];
}
