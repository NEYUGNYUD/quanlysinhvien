<?php
namespace App\Repositories\Role;

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Role;

class RoleRepository extends BaseRepositoryAbstract implements RoleRepositoryInterface {
    public function getModelName() {
        return Role::class;
    }
}
