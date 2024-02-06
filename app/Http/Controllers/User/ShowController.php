<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Contracts\View\View;

class ShowController extends BaseController
{
    public function __invoke(User $user): View
    {
        return view('user.show', compact('user'));
    }
}
