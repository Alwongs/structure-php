<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{

    public function login($data) 
    {
        $email = $data["email"];
        $password = $data["password"];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            die('User not found');
        }

        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION["user"] = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "username" => $user->username,
                "group" => $user->group,
                "email" => $user->email,
                "avatar" => $user->avatar
            ];
            Router::redirect('/profile');
        } else {
            die('Wrong password or email');
        }
    }


    public function register($data, $files)
    {

        /**
         * Validation can be here..
         */

        $email = $data["email"];
        $username = $data["username"];
        $full_name = $data["full_name"];
        $password = $data["password"];
        $password_confirm = $data["password_confirm"];

        if ($password !== $password_confirm) {
            Router::error(500);
            die();
        }


        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $fileName;

        if (move_uploaded_file($avatar["tmp_name"], $path)) {
            $user = \R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->full_name = $full_name;
            /**
             * 1 - user
             * 2 - admin
             */
            $user->group = 1;
            $user->avatar = "/" . $path;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            \R::store($user);
            Router::redirect('/login');
        } else {
            Router::error(500);
        }

    }
}