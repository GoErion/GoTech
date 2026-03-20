<?php

namespace App\DTOs;

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Http\Request;

class ForumDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int    $user_id,
        public string $title,
        public string $description,
        public string $image,
        public string $category
    )
    {
    }

    public static function fromRequest(array $request): self
    {
        return new self(
            user_id: auth()->user()->id,
            title: $request['title'],
            description: $request['description'],
            image: $request['image'],
            category: $request['category']
        );
    }
}
