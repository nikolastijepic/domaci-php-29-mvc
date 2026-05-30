<?php

namespace PHP28\Controllers;

use PHP28\Models\User;
use PHP28\Services\SessionService;

class UserController extends SessionService
{

    public function register(array $data)
    {
        if (!isset($data['username'])) {
            die("Niste prosledili username");
        }

        if (!isset($data['password'])) {
            die("Niste prosledili password");
        }

        if (!isset($data['confirm_password'])) {
            die("Niste prosledili confirm_password");
        }

        if (empty($data['username']) || empty($data['password']) || empty($data['confirm_password'])) {
            die("Morate uneti username, password i potvrdu password-a.");
        }

        if ($data['password'] !== $data['confirm_password']) {
            die("Sifre se ne podudaraju");
        }

        $userRegister = new User();
        if ($userRegister->userExists($data['username'])) {
            die("Ovaj korisnik vec postoji!");
        }

        $userRegister = $userRegister->userRegister($data['username'], $data['password']);
    }
    public function login(array $data): void
    {
        if (!isset($data['username'])) {
            die("Niste prosledili username");
        }

        if (!isset($data['password'])) {
            die("Niste prosledili password");
        }

        if (empty($data['username']) || empty($data['password'])) {
            die("Morate uneti username i password");
        }

        $userModel = new User();
        if (!$userModel->userExists($data['username'])) {
            die("Ovaj korisnik ne postoji!");
        }

        $user = $userModel->getUserByUsername($data['username']);

        if (!password_verify($data['password'], $user['password'])) {
            die("Sifre se ne podudaraju");
        }

        $this->setSession('user_id', $user['id'])
            ->setSession('loggedIn', true);
    }
}