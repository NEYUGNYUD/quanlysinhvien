<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAccountRequest;
use App\Repositories\AdminAccount\AdminAccountRepositoryInterface;
use App\Repositories\Level\LevelRepositoryInterface;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{

    protected $adminAccountRepository;
    protected $levelRepository;
    /**
     * AdminController constructor.
     */
    public function __construct(AdminAccountRepositoryInterface $adminAccountRepository, LevelRepositoryInterface $levelRepository)
    {
        $this->adminAccountRepository = $adminAccountRepository;
        $this->levelRepository = $levelRepository;
    }

    public function index()
    {
        $accountsList = $this->adminAccountRepository->all();
        return view('admin.pages.account.list', ['accountsList' => $accountsList]);
    }

    public function create()
    {
        $levelsList = $this->levelRepository->all();
        return view('admin.pages.account.insert', ['levelsList' => $levelsList]);
    }

    public function store(AdminAccountRequest $request) {
        $data = array();
        $data['remember_token'] = $request->_token;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['avatar'] = $request->avatar;
        $data['password'] = bcrypt($request->password);
        $data['level_id'] = (integer)($request->level);
        $data['locked'] = "";
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        if($this->adminAccountRepository->create($data)) {
            return redirect()->route('accounts.index')->with('notification', 'Thêm thành công');
        }
    }

    public function edit(User $user) {
        $levelsList = $this->levelRepository->all();
        return view('admin.pages.account.edit', ['user' => $user, 'levelsList' => $levelsList]);
    }
}
