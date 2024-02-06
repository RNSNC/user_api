<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(User $user, UserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->repository->updateUser($user, $data);

        return redirect()->route('user.show', $user->id)->with('success', 'Update successfully');
    }
}
