<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function storeUser(array $data)
    {
        $password = bcrypt($data['password']);
        return User::create($data, ['password' => $password]);
    }

    public function uploadImage($image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }
}
