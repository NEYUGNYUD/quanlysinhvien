<?php
namespace App\Repositories\AdminAccount;

interface AdminAccountRepositoryInterface {
    public function login($data);

    public function logout();
}