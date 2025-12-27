<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Forum;

final readonly class ForumAction
{
    public function handle($data)
    {
        return Forum::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
            'category' => $data['category'],
        ]);
    }
}
