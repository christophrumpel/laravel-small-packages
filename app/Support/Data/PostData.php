<?php

namespace App\Support\Data;

use App\Support\Enums\PostCategory;
use Spatie\LaravelData\Data;

class PostData extends Data
{

    public function __construct(
        public string $title,
        public string $content,
        public PostCategory $category,
    )
    {
    }
}
