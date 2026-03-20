<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Hero;

class HeroRepo
{
    public function create(array $data)
    {
        return Hero::create($data);
    }
}
