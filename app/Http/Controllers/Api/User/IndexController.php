<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Resources\UserResource;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return UserResource::collection(
            $this->repository->allUsers()
        );
    }
}
