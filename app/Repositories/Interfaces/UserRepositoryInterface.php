<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function allUsers();
    public function storeUser($data);
    public function findUser($id);
    public function updateUser(User|int $user, $data);
    public function destroyUser(User|int $user);
    public function findUsername($username);
}
