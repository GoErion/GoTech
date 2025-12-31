<?php

namespace App\Http\Requests;

use App\Enum\CategoryEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateForumRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes','required', 'string','min:3', 'max:20'],
            'description' => ['sometimes','required', 'string'],
            'image' => ['nullable','required','image', 'mimes:jpeg,jpg,png', 'max:6000'],
            'category' => ['sometimes','required',new Enum(CategoryEnum::class)],
        ];
    }
}
