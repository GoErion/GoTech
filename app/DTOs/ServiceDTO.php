<?php

declare(strict_types=1);

namespace App\DTOs;

readonly class ServiceDTO
{
    public function __construct(
        public int $user_id,
        public string $subtitle,
        public string $description
    )
    {
    }

    public static function fromRequest(array $request): self
    {
        return new self(
            user_id: auth()->user()->id,
            subtitle: $request['subtitle'],
            description: $request['description']
        );
    }
}
