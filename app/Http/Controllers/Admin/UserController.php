<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getListUser()
    {
    	$data['listUser'] = User::paginate(8);
    	return view('backend.users.listuse', $data);
    }
    public function getAddUser()
    {
    	return view('backend.users.adduse');
    }
    public function postAddUser(Request $request)
    {
    	$thanhvien = new User;
        $thanhvien->name = $request->name;
     	$thanhvien->username = $request->username;
    	$thanhvien->email = $request->email;
        $thanhvien->phone = $request->phone;
        $thanhvien->password = bcrypt($request->password);
        $thanhvien->status = 1;
        $thanhvien->save();
        return redirect('backend/users')->with('status','Thêm mới tài khoản thành công !');
    }
    public function getEditUser(Request $request)
    {
        $data['thanhvien'] = User::find($request->id);
        return view('backend.users.edituse', $data);
    }
    public function getDeleteUser(Request $request)
    {
        User::destroy($request->id);
        return back()->with('status','Xóa thành công');;
    }
    public function getLockUser(Request $request)
    {

        $id =  $request->id;
        $user = User::where('id', $id)->get();
        if($user[0]->status == 1){
            $status = 0;
            $str = "Khóa Thành Công !";
        }else {
            $status = 1;
            $str = "Mở Khóa Thành Công !";
        }
        $data = User::find($id);
        $data->status = $status;
        $data->save();
        return back()->with('status',$str);
    }
    public function postEditUser(Request $request)
    {
        $id = $request->id;
        $this->validate($request,

            ["txtName" => "required"],

            ["txtName.required" => "Bạn chưa nhập tên"],

            ['txtPasswordNew' => 'min:8|confirmed'],

            ["txtPasswordNew.length" => "Mật khẩu ít nhất 8 ký tự"],

            ["txtPassword" => "required"],

            ["txtPassword.required" => "Bạn chưa nhập lại mật khẩu"]

        );
        $data = User::find($id);
        if(!empty($data)){
            $data->name = $request->txtName;
            if(!empty($request->txtPasswordNew)){
                $data->password = bcrypt($request->txtPasswordNew);
            }       
            $data->phone = $request->txtPhone;
            $data->email = $request->txtEmail;
            $data->save();
            return redirect('backend/users/edituse?id='.$data->id)->with('status','Cập nhật thành công');
        }
    }
}
