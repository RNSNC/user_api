<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Contracts\View\View;

class EditController extends BaseController
{
    public function __invoke(User $user): View
    {
        return view('user.edit', compact('user'));
    }
}
