<?php
namespace App\Repositories\Student;

/**
 *
 */
interface StudentRepositoryInterface
{
    public function countStudents($classId, $yearId);
}
