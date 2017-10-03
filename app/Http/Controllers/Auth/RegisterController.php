<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/admin/accounts';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //có thể tùy chỉnh thông báo lỗi khi validation bằng cách truyền 1 mảng thông báo lỗi
        //tùy ý thành tham số thứ 3 của hàm make
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            're-password' => 'same:password',
            'avatar' => 'required'
        ];

        $messages = [
            'name.required' => 'Tên bỏ trống',
            'name.string' => 'Tên phải là 1 chuỗi ký tự',
            'name.max' => 'Độ dài tôi đa của tên là 255 ký tự' ,
            'email.required' => 'Email bỏ trống',
            'email.string' => 'Email phải là 1 string',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Độ dài email tối đa 255 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu bỏ trống',
            'password.string' => 'Mật khẩu phải là string',
            'password.min' => 'Độ dài mật khẩu tối thiểu 8 ký tự',
            're-password.same' => 'Mật khẩu không trùng nhau',
            'avatar.required' => 'Avatar bỏ trống'
        ];


        return Validator::make($data, $rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'avatar' => $data['avatar'],
            'level_id' => $data['level'],
            'locked' => "",
        ]);
    }
}
