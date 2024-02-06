<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Resources\UserResource;
use App\Models\User;

class ShowController extends BaseController
{
    public function __invoke(User $user)
    {
        return new UserResource($user);
    }
}
