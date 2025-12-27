<?php

declare( strict_types = 1 );

namespace App\Enum;

enum CategoryEnum: string
{
    case Marketing = 'Marketing';
    case Tutorial = 'Tutorial';
    case Support = 'Support';

    public function labels(): array|string|null
    {
        return match ($this)
        {
            self::Marketing => __('Marketing'),
            self::Tutorial => __('Tutorial'),
            self::Support => __('Support'),
        };
    }
}
