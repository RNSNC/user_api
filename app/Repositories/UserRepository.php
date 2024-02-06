<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function allUsers()
    {
        return User::all();
    }

    public function storeUser($data)
    {
        return User::create($data);
    }

    public function findUser($id)
    {
        return User::find($id);
    }

    public function updateUser(User|int $user, $data)
    {
        if (!$user instanceof User){
            $user = User::find($user);
        }
        $user->update($data);
    }

    public function destroyUser(User|int $user)
    {
        if (!$user instanceof User){
            $user = User::find($user);
        }
        $user->delete();
    }

    public function findUsername($username)
    {
        return User::where('username', $username)->get();
    }
}
