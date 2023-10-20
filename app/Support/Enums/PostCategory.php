<?php

namespace App\Support\Enums;

enum PostCategory: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';
}
