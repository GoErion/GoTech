<?php

declare(strict_types=1);

namespace App\Actions;

use App\DTOs\ServiceDTO;
use App\Models\Service;
use App\Repository\ServiceRepo;
use App\Service\CreateService;

final readonly class ServiceAction
{
    public function __construct(
        private CreateService $createService,
        private ServiceRepo $serviceRepo,
    )
    {
    }

    public function handle(ServiceDTO $dto)
    {
        $service = $this->createService->serviceArray($dto);

        return $this->serviceRepo->create($service);
    }
}
