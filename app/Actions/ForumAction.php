<?php

declare(strict_types=1);

namespace App\Actions;

use App\DTOs\ForumDTO;
use App\Models\Forum;
use App\Repository\ForumRepo;
use App\Service\ForumService;

final readonly class ForumAction
{
    public function __construct(
        private ForumService $forumService,
        private ForumRepo $forumRepo
    )
    {
    }

    public function handle(ForumDTO $forumDTO)
    {
        $dto = $this->forumService->forumArray($forumDTO);

        return $this->forumRepo->create($dto);
    }
}
