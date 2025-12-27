<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enum\CategoryEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ForumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string','min:3', 'max:20'],
            'description' => ['required', 'string'],
            'image' => ['required','image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'category' => ['required',new Enum(CategoryEnum::class)],
        ];
    }
}
