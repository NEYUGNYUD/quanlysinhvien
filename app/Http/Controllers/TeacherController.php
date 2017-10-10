<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Teacher\TeacherRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\Faculty\FacultyRepositoryInterface;
use App\Teacher;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    protected $teacherRepository;
    protected $roleRepository;
    protected $facultyRepository;


    public function __construct(TeacherRepositoryInterface $teacherRepository,
                                RoleRepositoryInterface $roleRepository,
                                FacultyRepositoryInterface $facultyRepository) {
        $this->teacherRepository = $teacherRepository;
        $this->roleRepository = $roleRepository;
        $this->facultyRepository = $facultyRepository;
    }

    public function index() {
        $teachersList = $this->teacherRepository->all();
        return view('admin.pages.teacher.list', ['teachersList' => $teachersList]);
    }

    public function create() {
        $rolesList = $this->roleRepository->all();
        $facultiesList = $this->facultyRepository->all();
        return view('admin.pages.teacher.insert', ['rolesList' => $rolesList, 'facultiesList' => $facultiesList]);
    }

    public function store(TeacherRequest $request) {
        $data = array();
        $data['code'] = $request->code;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['address'] = $request->address;
        $data['dob'] = $request->dob;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['passport'] = $request->passport;
        $data['phone'] = $request->phone;
        $data['faculty_id'] = $request->faculty;
        $data['role_id'] = $request->role;
        $data['created_at'] = date('Y:m:d H:i:s');
        $data['updated_at'] = date('Y:m:d H:i:s');
        $this->teacherRepository->create($data);
        return redirect()->route('teachers.index')->with('notification', 'Thêm thành công');
    }

    public function edit(Teacher $teacher) {
        $rolesList = $this->roleRepository->all();
        $facultiesList = $this->facultyRepository->all();
        return view('admin.pages.teacher.edit', ['teacher' => $teacher, 'rolesList' => $rolesList, 'facultiesList' => $facultiesList]);
    }

    public function update(TeacherRequest $request, Teacher $teacher) {
        $data = array();
        $data['code'] = $request->code;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['address'] = $request->address;
        $data['dob'] = $request->dob;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['passport'] = $request->passport;
        $data['phone'] = $request->phone;
        $data['faculty_id'] = $request->faculty;
        $data['role_id'] = $request->role;
        $data['updated_at'] = date('Y:m:d H:i:s');
        $this->teacherRepository->update($teacher, $data);
        return redirect()->route('teachers.index')->with('notification', 'Chỉnh sửa thành công');
    }
}
