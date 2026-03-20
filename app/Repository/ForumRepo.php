<?php

namespace App\Repository;

use App\Models\Forum;

class ForumRepo
{
    public function create(array $data)
    {
        return Forum::create($data);
    }
}
