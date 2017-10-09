<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StudentClass\StudentClassRepositoryInterface;
use App\Repositories\Faculty\FacultyRepositoryInterface;
use App\Http\Requests\StudentClassRequest;
use App\StudentClass;

class StudentClassController extends Controller
{
    protected $studentClassRepository;
    protected $facultyRepository;

    public function __construct(StudentClassRepositoryInterface $studentClassRepository, FacultyRepositoryInterface $facultyRepository) {
        $this->studentClassRepository = $studentClassRepository;
        $this->facultyRepository = $facultyRepository;

    }

    public function index() {
        $classesList = $this->studentClassRepository->all();
        return view('admin.pages.student_class.list', ['classesList' => $classesList]);
    }

    public function create() {
        $facultiesList = $this->facultyRepository->all();
        return view('admin.pages.student_class.insert', ['facultiesList' => $facultiesList]);
    }

    public function store(StudentClassRequest $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['faculty_id'] = $request->faculty;
        $data['created_at'] = date('Y:m:d H:i:s');
        $data['updated_at'] = date('Y:m:d H:i:s');
        $this->studentClassRepository->create($data);
        return redirect()->route('classes.index')->with('notification', 'Thêm thành công');
    }

    public function edit(StudentClass $class) {
        $facultiesList = $this->facultyRepository->all();
        return view('admin.pages.student_class.edit', ['class' => $class, 'facultiesList' => $facultiesList]);
    }
    public function update(StudentClassRequest $request, StudentClass $class) {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['faculty_id'] = $request->faculty;
        $data['updated_at'] =  date('Y:m:d H:i:s');
        $this->studentClassRepository->update($class, $data);
        return redirect()->route('classes.index')->with('notification', 'Chỉnh sửa thành công');
    }


}
