<?php
namespace App\Repositories\Student;

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Student\StudentRepositoryInterface;
use App\Student;

class StudentRepository extends BaseRepositoryAbstract implements StudentRepositoryInterface {
    public function getModelName() {
        return Student::class;
    }
    public function countStudents($classId, $yearId) {
        return $this->model->where('class_id', '=', $classId)->where('year_start', '=', $year_id)->count();
    }
}
