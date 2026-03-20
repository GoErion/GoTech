<?php

declare(strict_types=1);

namespace App\Service;

use App\DTOs\ServiceDTO;

final class CreateService
{
    public function serviceArray(ServiceDTO $dto): array
    {
        return
            [
                'user_id'=>$dto->user_id,
                'subtitle'=>$dto->subtitle,
                'description'=>$dto->description,
            ];
    }
}
