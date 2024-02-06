<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\Api\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(User $user, UserRequest $request)
    {
        $this->repository->updateUser($user, $request->validated());
        return new UserResource($user);
    }
}
