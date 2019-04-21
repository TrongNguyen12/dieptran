<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slider;
use Input, File;
class SliderController extends Controller
{
    public function getListSlider(Request $request)
    {
        $type = $request->type;
        if($type == 'slider'){
            $data['listSlider'] = Slider::where('type', 1)->get();
        }else {
            $data['listSlider'] = Slider::where('type', 2)->get();
        }
    	return view('backend.slider.list', $data);
    }
    public function getAddSlider(Request $request)
    {
        $type = $request->type;
        $data['type'] = $type;
    	return view('backend.slider.add', $data);
    }
    public function postAddSlider(Request $request)
    {
   		$this->validate($request, 
   			["txtName" => "required"], 
   			["txtName.required" => "Bạn chưa nhập tên slider"
   		]);
        $type = $request->type;

        $img = $request->file('fImages');
        $path_img = 'upload/hinhanh/slider';
        $img_name = '';
        if (!empty($img))
        {
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img->move($path_img, $img_name);
        }
        $slide = new Slider;
        $slide->name = $request->txtName;
        $slide->mota = $request->txtDesc;
        $slide->link = $request->txtLink;
        $slide->photo = $img_name;
        if (!empty($request->display)){
            $slide->display = $request->display;
        }
        $slide->stt = intval($request->stt);
        if ($request->status == 'on'){
            $slide->status = 1;
        }
        else{
            $slide->status = 0;
        }
        if($type == 'slider'){
            $slide->type = 1;
        }else {
            $slide->type = 2;
        }
        $slide->save();
        return redirect('backend/slider?type='.$type)->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Thêm mới thành công!']); 	
    }
    public function getEditSlider(Request $request)
    {
        $data['data'] = Slider::find($request->id);
        $type = $request->type;
        $data['type'] = $type;
        return view('backend.slider.edit', $data);
    }
    public function postEditSlider(Request $request)
    {
        $id = $request->get('id');
        $type = $request->type;
        $slide = Slider::findOrFail($id);
        if (!empty($slide))
        {
            $img = $request->file('fImages');
            $img_current = 'upload/hinhanh/slider' . $request->img_current;
            if (!empty($img)){
                $path_img = 'upload/hinhanh/slider';
                $img_name = time() . '_' . $img->getClientOriginalName();
                $img->move($path_img, $img_name);
                $slide->photo = $img_name;
                if (File::exists($img_current)){
                    File::delete($img_current);
                }
            }
            $img2 = $request->file('fImages2');
			$slide->stt = intval($request->stt);
            $img_current2 = 'upload/hinhanh/slider' . $request->img_current2;
            if (!empty($img2)){
                $path_img2 = 'upload/hinhanh/slider';
                $img_name2 = time() . '_' . $img2->getClientOriginalName();
                $img2->move($path_img2, $img_name2);
                $slide->icon = $img_name2;
                if (File::exists($img_current2)){
                    File::delete($img_current2);
                }
            }
            $slide->name = $request->txtName;
            $slide->link = $request->txtLink;
            if (!empty($request->display)){
                $slide->display = $request->display;
            }
            $slide->mota = $request->txtDesc;

            if ($request->status == 'on'){
                $slide->status = 1;
            }
            else{
                $slide->status = 0;
            }
            $slide->save();
            return redirect('backend/slider/edit?id=' . $id .'&type?='.$type)->with('status', 'Cập nhật thành công');
        }
    }
    public function getDeleteSlider(Request $request)
    {
        Slider::destroy($request->id);
        return back()->with('status','Xóa thành công');;
    }
}
