<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Faculty\FacultyRepositoryInterface;
use App\Http\Requests\FacultyRequest;
use App\Faculty;

class FacultyController extends Controller
{
    protected $facultyRepository;

    public function __construct(FacultyRepositoryInterface $facultyRepository) {
        $this->facultyRepository = $facultyRepository;
    }

    public function index() {
        $faculty = $this->facultyRepository->all();
        return view('admin.pages.faculty.show', ['faculty' => $faculty]);
    }

    public function store(FacultyRequest $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['created_at'] = date('Y:m:d H:i:s');
        $data['updated_at'] = date('Y:m:d H:i:s');
        $data['faculty_code'] = $request->code;
        $this->facultyRepository->create($data);
        return redirect()->route('faculties.index')->with('notification', 'Khởi tạo thông tin khoa thành công');
    }

    public function create() {
        return view('admin.pages.faculty.ini');
    }

    public function edit(Faculty $faculty) {
        return view('admin.pages.faculty.edit', ['faculty' => $faculty]);
    }

    public function update(FacultyRequest $request, Faculty $faculty) {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['faculty_code'] = $request->code;
        $data['updated_at'] = date('Y:m:d H:i:s');
        $this->facultyRepository->update($faculty, $data);
        return redirect()->route('faculties.index')->with('notification', 'Chỉnh sửa thành công');
    }
}
