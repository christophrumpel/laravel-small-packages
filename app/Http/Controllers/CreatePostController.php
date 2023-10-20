<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostFormRequest;
use App\Models\Post;

class CreatePostController extends Controller
{
    public function __invoke(CreatePostFormRequest $request)
    {
        Post::create($request->validated());
    }
}
