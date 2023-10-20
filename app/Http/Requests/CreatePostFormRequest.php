<?php

namespace App\Http\Requests;

use App\Support\Enums\PostCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreatePostFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'category' => [new Enum(PostCategory::class)],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
