<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Support\Data\PostData;

class CreatePostController extends Controller
{
    public function __invoke(PostData $data)
    {
        Post::create($data->toArray());
    }
}
