<?php
/**
 * Created by PhpStorm.
 * User: duype
 * Date: 9/30/2017
 * Time: 4:57 PM
 */

namespace App\Repositories\AdminAccount;

use App\Repositories\BaseRepositoryAbstract;
use App\User;

class AdminAccountRepository extends BaseRepositoryAbstract implements AdminAccountRepositoryInterface
{
    function getModelName()
    {
        return User::class;
    }

    public function login($data)
    {
        // TODO: Implement login() method.
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

}