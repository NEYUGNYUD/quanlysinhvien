<?php
namespace App\Repositories\StudentClass;

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\StudentClass\StudentClassRepositoryInterface;
use App\StudentClass;

class StudentClassRepository extends BaseRepositoryAbstract implements StudentClassRepositoryInterface {
    public function getModelName() {
        return StudentClass::class;
    }
}
