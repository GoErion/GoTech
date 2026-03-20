<?php

namespace App\Service;

use App\DTOs\ForumDTO;
use App\Enum\CategoryEnum;
use App\Models\Forum;
use Illuminate\Http\UploadedFile;

class ForumService
{
    public function forumArray(ForumDTO $dto,?UploadedFile $file = null): array
    {
        $category = $dto->category;

        //handle category enum
        if (isset($category) && ! ($category instanceof CategoryEnum))
        {
            $category = CategoryEnum::from($category);
        }

        return
            [
                'title' => $dto->title,
                'description' => $dto->description,
                'category' => $dto->category,
                'user_id' => $dto->user_id,
                'image' => $dto->image,
            ];
    }
}
