<?php

namespace App\Actions;

use App\Models\Forum;

class UpdateForumAction
{
    public function handle(Forum $forum,array $userData): bool
    {
        return $forum->update([
            'title' => $userData['title'],
            'description' => $userData['description'],
            'image' => $userData['image'],
            'category' => $userData['category'],
        ]);
    }
}
