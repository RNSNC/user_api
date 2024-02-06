<?php

namespace App\Http\Controllers\User;

use Illuminate\Contracts\View\View;

class CreateController extends BaseController
{
    public function __invoke(): View
    {
        return view('user.create');
    }
}
