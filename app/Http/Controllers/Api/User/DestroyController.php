<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(User $user): JsonResponse
    {
        $this->repository->destroyUser($user);
        return new JsonResponse('successful', 200);
    }
}
