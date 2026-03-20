<?php

declare(strict_types=1);

namespace App\DTOs;

readonly class HeroDTO
{
    public function __construct(
        public int $user_id,
        public string $heading,
        public string $hero_image,
    )
    {
    }

    public static function fromRequeast(array $request): self
    {
        return new self(
            user_id: auth()->user()->id,
            heading: $request['heading'],
            hero_image: $request['hero_image'],
        );
    }
}
