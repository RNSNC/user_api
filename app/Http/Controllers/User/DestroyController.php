<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke(User $user): RedirectResponse
    {
        $this->repository->destroyUser($user);
        return redirect()->route('user.index')->with('success', 'Delete successfully');
    }
}
