<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catepost;

class CategoryPost extends Controller
{
    public function getListCate()
    {
    	$data['data'] = Catepost::all();
    	return view('backend.catenew.list', $data);
    }
    public function getAddCate()
    {    	
    	return view('backend.catenew.add');
    }
    public function postAddCate(Request $request)
    {
    	$cate = new Catepost;
    	$cate->name = $request->txtName;
    	if($request->txtAlias != null){
    		$cate->slug = $request->txtAlias;
    	}else {
    		$cate->slug = str_lug($request->txtAlias);
    	}
    	$cate->title = $request->txtTitle;
    	$cate->keyword = $request->txtKeyword;
    	$cate->description = $request->txtDescription;
    	$cate->nameeg = $request->txtName_eg;
		$cate->titleeg = $request->txtTitle_eg;
		$cate->keywordeg = $request->txtKeyword_eg;
		$cate->descriptioneg = $request->txtDescription_eg;
		if ($request->status == 'on'){
            $cate->status = 1;
        }else {
        	$cate->status = 0;
        }
        $cate->lang = $request->txtlg;
        $cate->save();
       	return redirect('backend/catenew')->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Thêm mới thành công!']);
    }
    public function getDeleteCate(Request $request)
    {
    	$id = $request->id;
    	$cate = Catepost::findorfail($id);
    	$cate->destroy($id);
    	return back();
    }
    public function getEditCate(Request $request)
    {
    	$id = $request->id;
    	$data['data']  = Catepost::where('id', $id)->first();
    	return view('backend.catenew.edit', $data);

    }
    public function postEditCate(Request $request)
    {
    	$id = $request->id;
    	$cate = Catepost::find($id);
        $cate->name = $request->txtName;
        if($request->txtAlias != null){
            $cate->slug = $request->txtAlias;
        }else {
            $cate->slug = str_lug($request->txtAlias);
        }
        $cate->title = $request->txtTitle;
        $cate->keyword = $request->txtKeyword;
        $cate->description = $request->txtDescription;
        $cate->nameeg = $request->txtName_eg;
        $cate->titleeg = $request->txtTitle_eg;
        $cate->keywordeg = $request->txtKeyword_eg;
        $cate->descriptioneg = $request->txtDescription_eg;
        if ($request->status == 'on'){
            $cate->status = 1;
        }else {
            $cate->status = 0;
        }
        $cate->lang = $request->txtlg;
        $cate->save();
        return redirect('backend/catenew')->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Sửa mới thành công!']);
    }
}
