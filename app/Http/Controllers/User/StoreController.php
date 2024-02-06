<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(UserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->repository->storeUser($data);

        return redirect()->route('user.index')->with('success', 'Create successfully');
    }
}
