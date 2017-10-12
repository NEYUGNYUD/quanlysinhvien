<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Student\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository) {
        $this->studentRepository = $studentRepository;
    }

    public function index() {

    }

    public function update() {

    }

    public function create() {
    
    }
}
