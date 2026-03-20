<?php

declare(strict_types=1);

namespace App\Service;

use App\DTOs\HeroDTO;

final class HeroService
{
    public function heroCreate(HeroDTO $dto): array
    {
        return
            [
                'user_id'=>$dto->user_id,
                'heading'=>$dto->heading,
                'hero_image'=>$dto->hero_image,
            ];
   }
}
