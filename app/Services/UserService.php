<?php

namespace App\Services;

use App\Models\Users;

class UserService
{

    public function validate($username, $password)
    {
        $filter = [
            'username' => $username,
            'password' => md5($password)
        ];

        return (Users::where($filter)->count() > 0);
    }

    public function getUserByUsername($username)
    {
        return Users::where('username', $username)->firstOrFail();
    }

}
