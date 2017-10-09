<?php
namespace App\Repositories\Faculty;

use App\Faculty;
use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Faculty\FacultyRepositoryInterface;

class FacultyRepository extends BaseRepositoryAbstract implements FacultyRepositoryInterface {
    public function getModelName() {
        return Faculty::class;
    }
}
