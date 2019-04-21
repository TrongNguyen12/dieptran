<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dichvu;
use App\Models\moreImages;
class DichVuController extends Controller
{
    public function getDichVu()
    {
    	$data['data'] = Dichvu::get();
    	return view('backend.dichvu.list', $data);
    }
    public function getAddDichVu()
    {
    	return view('backend.dichvu.add');
    }
    public function postAddDichVu(Request $request)
    {
    	$img = $request->file('fImages');
        $path_img = 'upload/hinhanh/post';
        $img_name = '';
        if (!empty($img)){
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img->move($path_img, $img_name);
        }

        $dichvu = new Dichvu;
        $dichvu->name = $request->txtName;
        if ($request->txtAlias){
            $dichvu->slug = $request->txtAlias;
        }
        else{
            $dichvu->slugeg = str_slug($request->txtName);
        }
        if($request->txtName_eg){
            $dichvu->slugeg = $request->txtName_eg;
        }
        $dichvu->img = $img_name;
        if ($request->status == 'on'){
            $dichvu->displayhome = 1;
        	$dichvu->displayhomeeg = 1;
        }
        $dichvu->titlehomeeg = $request->txtName_eg;
        $dichvu->nameeg = $request->txtName_eg;
        $dichvu->shortdes = $request->shortdes;
        $dichvu->shortdeseg = $request->shortdes_eg;
        $dichvu->titlehome = $request->txtNameHome;
        $dichvu->titleseo = $request->txtTitle;
        $dichvu->content = $request->txtContent;
        $dichvu->metakeyword = $request->txtKeyword;
        $dichvu->metadescription = $request->txtDescription;

        $dichvu->titleseoeg = $request->txtTitle_eg;
        $dichvu->contenteg = $request->txtContent_eg;
        $dichvu->metakeywordeg = $request->txtKeyword_eg;
        $dichvu->metadescriptioneg = $request->txtDescription_eg;
        $dichvu->status = 1;
        $dichvu->save();
        if($dichvu->id != null){
            $more = $request->moreImages;
			if(!empty($more)){
                foreach ($request->moreImages as $item) {
                    $path_img = 'upload/hinhanh/post/lib';
                    $more_img_name = time() . '_' . $item->getClientOriginalName();
					$item->move($path_img, $more_img_name);
					$moreImages = new moreImages;
					$moreImages->name = $more_img_name;
					$moreImages->id_cat = $dichvu->id;
					$moreImages->type = 1;
					$moreImages->status = 1;
					$moreImages->save();
					
                }
            }
        }
        return redirect('backend/post')
            ->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Thêm mới thành công!']);
    }
    public function getDeleteDichVu(Request $request)
    {
    	Dichvu::destroy($request->id);
        return back()->with('status','Xóa thành công');
    }
    public function getEditDichVu(Request $request)
    {
    	$id = $request->id;
    	$data['data'] = DichVu::where('id', $id)->get();
        $data['listImages'] = moreImages::where('id_cat', $id)->get();
     
    	return view('backend.dichvu.edit', $data);
    }
    public function postEditDichVu(Request $request)
    {
    	$id = $request->id;
    	$this->validate($request, ["txtName" => "required"], ["txtName.required" => "Bạn chưa nhập tên danh mục"]);
        if ($id){
            $dichvu = Dichvu::findOrFail($id);
            $img = $request->file('fImages');
            $img_current = 'upload/hinhanh/post/' . $request->img_current;
            if (!empty($img)){
                $path_img = 'upload/hinhanh/post';
                $img_name = time() . '_' . $img->getClientOriginalName();
                $img->move($path_img, $img_name);
                $dichvu->img = $img_name;
            }
	        $dichvu->name = $request->txtName;
	        if ($request->txtAlias){
	            $dichvu->slug = $request->txtAlias;
	        }
	        else{
	            $dichvu->slugeg = str_slug($request->txtName);
	        }
	        if($request->txtName_eg){
	            $dichvu->slugeg = $request->txtName_eg;
	        }
	        if ($request->status == 'on'){
	            $dichvu->displayhome = 1;
	        	$dichvu->displayhomeeg = 1;
	        }else {
	        	$dichvu->displayhome = 0;
	        	$dichvu->displayhomeeg = 0;
	        }
            $dichvu->titlehomeeg = $request->txtName_eg;
            $dichvu->nameeg = $request->txtName_eg;
            $dichvu->shortdes = $request->shortdes;
            $dichvu->shortdeseg = $request->shortdes_eg;
            $dichvu->titlehome = $request->txtNameHome;
	        $dichvu->titleseo = $request->txtTitle;
	        $dichvu->content = $request->txtContent;
	        $dichvu->metakeyword = $request->txtKeyword;
	        $dichvu->metadescription = $request->txtDescription;
	        $dichvu->titleseoeg = $request->txtTitle_eg;
	        $dichvu->contenteg = $request->txtContent_eg;
	        $dichvu->metakeywordeg = $request->txtKeyword_eg;
	        $dichvu->metadescriptioneg = $request->txtDescription_eg;
	        $dichvu->status = 1;
	        $dichvu->save();
            if($id != null){
                if(!empty($request->moreImages)){
                    foreach ($request->moreImages as $item) {
                        $path_img = 'upload/hinhanh/post/lib';
                        $more_img_name = time() . '_' . $item->getClientOriginalName();
                        if(!empty($more_img_name)){
                            $item->move($path_img, $more_img_name);
							$delete = moreImages::where('id_cat', $id)->delete();
                            $moreImages = new moreImages;
                            $moreImages->name = $more_img_name;
                            $moreImages->id_cat = $id;
                            $moreImages->type = 1;
                            $moreImages->status = 1;
                            $moreImages->save();
                        }
                    }
                }
            }
        	return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Sửa thành công !']);
        }else{
            return redirect('backend/post/')
                ->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Dữ liệu không có thực!']);
        }
    }
    public function getDeleteImgDichVu(Request $request)
    {
        moreImages::destroy($request->id);
        return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Xóa ảnh thành công!']);
    }
}
