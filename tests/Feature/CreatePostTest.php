<?php

use App\Models\Post;
use App\Support\Enums\PostCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('stores a new post', function () {
    // Act
    $this->post(route('create-post'), [
       'title' => 'My New Post',
       'content' => 'My post content.',
       'category' => PostCategory::PUBLISHED->value,
    ])->assertSuccessful();

    // Assert
    $this->assertDatabaseCount(Post::class, 1);
    $this->assertDatabaseHas(Post::class, [
        'title' => 'My New Post',
        'content' => 'My post content.',
        'category' => PostCategory::PUBLISHED,
    ]);
});

it('only accepts real categories', function () {
    // Act & Assert
    $this->post(route('create-post'), [
        'title' => 'My New Post',
        'content' => 'My post content.',
        'category' => 'not-a-real-category',
    ])->assertSessionHasErrors('category');
});
