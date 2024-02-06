<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\Api\UserRequest;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(UserRequest $request)
    {
        return $this->service->storeApi($request->validated());
    }
}
