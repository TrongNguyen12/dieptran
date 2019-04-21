<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('backend.auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
    	$auth = array(
            'username' => $request->username,
            'password' => $request->password,
            'status' => 1
        );
        $remember = $request->remember ? true : false;
        if (Auth::attempt($auth, $remember)){
            return redirect('backend')->with('flash_notice', 'Đăng nhập thành công.');
        }else{
            return redirect('login')
                 ->with('flash_error', 'Tên đăng nhập hoặc mật khẩu không đúng.')
                 ->withInput();
        }
    }
}
