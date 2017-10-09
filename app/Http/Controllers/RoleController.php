<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Http\Requests\RoleRequest;
use App\Role;

class RoleController extends Controller
{
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository) {
        $this->roleRepository = $roleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolesList = $this->roleRepository->all();
        return view('admin.pages.role.list', ['rolesList' => $rolesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.role.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['created_at'] = date('Y:m:d H:i:m');
        $data['created_at'] = date('Y:m:d H:i:m');
        $this->roleRepository->create($data);
        return redirect()->route('roles.index')->with('notification', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.pages.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['created_at'] = date('Y:m:d H:i:s');
        $data['updated_at'] = date('Y:m:d H:i:s');
        $this->roleRepository->update($role, $data);
        return redirect()->route('roles.index')->with('notification', 'Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
