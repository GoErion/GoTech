<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Service;

class ServiceRepo
{
    public function create(array $data): Service
    {
        return Service::create($data);
    }
}
