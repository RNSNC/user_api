<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\User\Service;

class BaseController extends Controller
{
    public function __construct(
        protected readonly UserRepositoryInterface $repository,
        protected readonly Service $service,
    ){}
}
