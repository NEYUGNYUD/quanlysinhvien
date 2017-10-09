<?php
namespace App\Repositories\Teacher;

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Teacher\TeacherRepositoryInterface;
use App\Teacher;

class TeacherRepository extends BaseRepositoryAbstract implements TeacherRepositoryInterface {
    public function getModelName() {
        return Teacher::class;
    }
}
