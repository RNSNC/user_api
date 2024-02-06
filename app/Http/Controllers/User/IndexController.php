<?php

namespace App\Http\Controllers\User;

use Illuminate\Contracts\View\View;

class IndexController extends BaseController
{
    public function __invoke(): View
    {
        $users = $this->repository->allUsers();
        return view('user.index', compact('users'));
    }
}
