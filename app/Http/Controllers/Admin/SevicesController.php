<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dichvu;
use App\Models\Sevices;
use DateTime;
class SevicesController extends Controller
{
    public function getServiceDetail()
    {
        $data['data'] = Sevices::with('Dichvu')->orderBy('id_cateSevice')->get();
        //dd($data['listCate']);
    	return view('backend.sevices.list', $data);
    }
    public function getAddServiceDetail()
    {
    	$data['listCate'] = Dichvu::all();
    	return view('backend.sevices.add', $data);
    }
    public function postAddServiceDetail(Request $request)
    {
    	
    	$sevices = new Sevices;
        
    	$sevices->title = $request->txtName;
    	$sevices->slug = str_slug($request->txtAlias);
    	$sevices->shortdescription = $request->shortdes;
    	$sevices->content = $request->txtContent;
    	$sevices->titleseo = $request->txtTitle;
    	$sevices->keywordseo = $request->txtKeyword;
    	$sevices->descriptionseo = $request->txtDescription;

    	$sevices->dateUpdate = new DateTime();

    	$sevices->titleeg = $request->txtName_eg;

    	$sevices->contenteg = $request->txtContent_eg;

    	$sevices->shortdescriptioneg = $request->shortdes_eg;

    	$sevices->titleseoeg = $request->txtTitle_eg;

    	$sevices->keywordseoeg = $request->txtKeyword_eg;

    	$sevices->descriptionseoeg = $request->txtDescription_eg;

    	if ($request->status == 'on') {
    		$sevices->status = 1;
    	}else {
    		$sevices->status = 0;
    	}

    	$sevices->id_cateSevice = $request->txtProductCate;

    	$img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/hinhanh/sevices';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $sevices->photo = $img_name;
        }
    	$sevices->save();

    	return redirect('backend/sevices')->with('status','Thêm nhật thành công');
    }
    public function getDeleteSevice(Request $request)
    {
        $id = $request->id;
        $cate = Sevices::findorfail($id);
        $cate->destroy($id);
        return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => ' Xóa thành công!']);;
    }
    public function getEditPostNew(Request $request)
    {
        $id = $request->id;
        $data['listCate'] = Dichvu::all();
        $data['data']  = Sevices::where('id', $id)->first();
        return view('backend.sevices.edit', $data);    
    }
    public function postEditPostNew(Request $request)
    {
        $sevices = Sevices::find( $request->id);
        $sevices->title = $request->txtName;
        $sevices->slug = str_slug($request->txtAlias);
        $sevices->shortdescription = $request->shortdes;
        $sevices->content = $request->txtContent;
        $sevices->titleseo = $request->txtTitle;
        $sevices->keywordseo = $request->txtKeyword;
        $sevices->descriptionseo = $request->txtDescription;

        $sevices->dateUpdate = new DateTime();

        $sevices->titleeg = $request->txtName_eg;

        $sevices->contenteg = $request->txtContent_eg;

        $sevices->shortdescriptioneg = $request->shortdes_eg;

        $sevices->titleseoeg = $request->txtTitle_eg;

        $sevices->keywordseoeg = $request->txtKeyword_eg;

        $sevices->descriptionseoeg = $request->txtDescription_eg;

        if ($request->status == 'on') {
            $sevices->status = 1;
        }else {
            $sevices->status = 0;
        }

        $sevices->id_cateSevice = $request->txtProductCate;

        $img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/hinhanh/sevices';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $sevices->photo = $img_name;
        }
        $sevices->save();
        return redirect('backend/sevices/edit?id='.$request->id)->with('status','Cập nhật thành công'); 
    }
	public function deleteList($id)
    {
        $idPost = explode(",", $id);
		foreach ($idPost as $item) {
            $cate = Sevices::findorfail($item);
            $cate->destroy($item);
        }
        return back()->with('status','Xóa thành công !'); 
    }
}
