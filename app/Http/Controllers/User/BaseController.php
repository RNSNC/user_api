<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserRepositoryInterface;

class BaseController extends Controller
{
    public function __construct(
        protected readonly UserRepositoryInterface $repository
    ){}
}
