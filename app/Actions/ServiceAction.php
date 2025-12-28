<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Service;

final readonly class ServiceAction
{
    public function handle($data)
    {
        return Service::create([
            'user_id'=> auth()->id(),
            'subtitle' => $data['subtitle'],
            'description' => $data['description'],
        ]);
    }
}
