<?php

namespace App\Http\Controllers;

use App\Models\User;

class CreatePostFormController extends Controller
{
    public function __invoke()
    {
        auth()->login(User::first());

        return view('posts.create');
    }
}
