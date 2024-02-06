<?php

namespace App\Services\User;

use App\Http\Resources\UserResource;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class Service
{
    public function __construct(
        private readonly UserRepositoryInterface $repository,
    ){}

    public function storeApi($data)
    {
        $checkDB = $this->repository->findUsername($data['username']);
        if ($checkDB->count()) {
            return new JsonResponse([
                'error' => 'The username has already been taken.',
            ], 409);
        }
        $user = $this->repository->storeUser($data);
        return new UserResource($user);
    }
}
