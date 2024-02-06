<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    ){}

    public function __invoke(): View
    {
        $users = $this->userRepository->allUsers();
        return view('home', compact('users'));
    }
}
