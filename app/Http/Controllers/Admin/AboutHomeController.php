<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\video;
use App\Models\abouthome;
use Input, File;
use Validator;
use App\Http\Requests\fileupload;
class AboutHomeController extends Controller
{
    public function getAbout()
    {
    	$data['videovi'] = video::where('id_lg', 1)->get();
    	$data['videoen'] = video::where('id_lg', 2)->get();
    	$data['content'] = abouthome::all();
    	return view('backend.abouthome.show', $data);
    }
    public function postAbout(Request $request)
    {
    	$abouthome = abouthome::find(1);
    	$abouthome->decs = $request->content;
    	$abouthome->save();
    	$abouthome = abouthome::find(2);
    	$abouthome->decs = $request->content_eg;
    	$abouthome->save();
    	return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Sửa mới thành công!']);
    }
    public function getAddVideoAbout(Request $request)
    {
    	$data['id'] =$request->id; 
    	return view('backend.abouthome.videoadd', $data);
    }
    public function postAddVideoAbout(Request $request)
    {
    	$id = $request->id;
        $img = $request->file('fImages');
        $path_img = 'upload/hinhanh/video';
        $img_name = '';
        if (!empty($img)){
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img->move($path_img, $img_name);
        }
    	$slide = new video;
    	$slide->name = $request->txtName;
        $slide->id_lg = $id;
        $slide->link = $request->txtLink;
        $slide->photo = $img_name;
        $slide->save();
        return redirect('/backend/abouthome')->with(['toastr_lvl' => 'success', 'toastr_msg' => 'Thêm mới thành công!']); 
    }
    public function getEditVideoAbout(Request $request)
    {
    	$id = $request->id;
    	$data['data'] = video::where('id', $id)->get();
    	return view('backend.abouthome.videoedit', $data);
    }
    public function postEditVideoAbout(Request $request)
    {
    	$id = $request->get('id');
        $video = video::findOrFail($id);
        if (!empty($video))
        {
	        $img = $request->file('fImages');
	        $img_current = 'upload/hinhanh/video' . $request->img_current;
	        if (!empty($img)){
	            $path_img = 'upload/hinhanh/video';
	            $img_name = time() . '_' . $img->getClientOriginalName();
	            $img->move($path_img, $img_name);
	            $video->photo = $img_name;
	            if (File::exists($img_current)){
	                File::delete($img_current);
	            }
	        }
	        $img2 = $request->file('fImages2');
	        $img_current2 = 'upload/hinhanh/video' . $request->img_current2;
	        if (!empty($img2)){
	            $path_img2 = 'upload/hinhanh/video';
	            $img_name2 = time() . '_' . $img2->getClientOriginalName();
	            $img2->move($path_img2, $img_name2);
	            $slide->icon = $img_name2;
	            if (File::exists($img_current2)){
	                File::delete($img_current2);
	            }
	        }
	        $video->name = $request->txtName;
	        $video->link = $request->txtLink;
	        $video->save();
	        return redirect('backend/abouthome/video/edit?id=' . $id)->with('status', 'Cập nhật thành công');
	    }
    }
    public function getDeleteVideoAbout(Request $request)
    {
    	video::destroy($request->id);
        return back()->with('status','Xóa thành công');;
    }
}
