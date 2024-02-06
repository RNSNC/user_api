<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    public function model(array $row)
    {
        return new User([
            'username' => $row[0],
            'email'    => $row[1],
            'password' => Hash::make($row[2])
        ]);
    }
}
