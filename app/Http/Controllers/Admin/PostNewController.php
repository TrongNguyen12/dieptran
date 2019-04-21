<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostNew;
use App\Models\Catepost;
use DateTime;
class PostNewController extends Controller
{
    public function getListPostNew()
    {
    	$data['data'] = PostNew::with('Catepost')->get();
    	return view('backend.post.list', $data);
    }
    public function getAddPostNew()
    {
    	$data['listCate'] = Catepost::where('status', 1)->get();
    	return view('backend.post.add', $data);
    }
    public function postAddPostNew(Request $request)
    {
    	
    	$postNew = new PostNew;
    	$postNew->title = $request->txtName;
    	$postNew->slug = str_slug($request->txtAlias);
    	$postNew->shortdescription = $request->shortdes;
    	$postNew->content = $request->txtContent;
    	$postNew->titleseo = $request->txtTitle;
    	$postNew->keywordseo = $request->txtKeyword;
    	$postNew->descriptionseo = $request->txtDescription;

    	$postNew->dateUpdate = new DateTime();

    	$postNew->titleeg = $request->txtName_eg;

    	$postNew->contenteg = $request->txtContent_eg;

    	$postNew->shortdescriptioneg = $request->shortdes_eg;

    	$postNew->titleseoeg = $request->txtTitle_eg;

    	$postNew->keywordseoeg = $request->txtKeyword_eg;

    	$postNew->descriptionseoeg = $request->txtDescription_eg;

    	if ($request->status == 'on') {
    		$postNew->status = 1;
    	}else {
    		$postNew->status = 0;
    	}

    	$postNew->id_catepost = $request->txtProductCate;

    	$img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/hinhanh/post/new';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $postNew->photo = $img_name;
        }
        $banner = $request->file('fImagesbn');
        if(!empty($banner)){
            $path_img='upload/hinhanh/post/new';
            $img_name=time().'-'.$banner->getClientOriginalName();
            $banner->move($path_img,$img_name);
            $postNew->bannertop = $img_name;
        }
    	$postNew->save();
    	return redirect('backend/new')->with('status','Thêm thành công'); 
    }
    public function getDeletePostNew(Request $request)
    {
    	$id = $request->id;
    	$cate = PostNew::findorfail($id);
    	$cate->destroy($id);
    	return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => ' Xóa thành công!']);;
    }
    public function getEditPostNew(Request $request)
    {

    	$id = $request->id;
    	$data['listCate'] = Catepost::where('status', 1)->get();
    	$data['data']  = PostNew::where('id', $id)->first();
    	return view('backend.post.edit', $data);
    }
    public function postEditPostNew(Request $request)
    {
    	$postNew = PostNew::find( $request->id);
    	$postNew->title = $request->txtName;
    	$postNew->slug = str_slug($request->txtAlias);
    	$postNew->shortdescription = $request->shortdes;
    	$postNew->content = $request->txtContent;
    	$postNew->titleseo = $request->txtTitle;
    	$postNew->keywordseo = $request->txtKeyword;
    	$postNew->descriptionseo = $request->txtDescription;

    	$postNew->dateUpdate = new DateTime();

    	$postNew->titleeg = $request->txtName_eg;

    	$postNew->contenteg = $request->txtContent_eg;

    	$postNew->shortdescriptioneg = $request->shortdes_eg;

    	$postNew->titleseoeg = $request->txtTitle_eg;

    	$postNew->keywordseoeg = $request->txtKeyword_eg;

    	$postNew->descriptionseoeg = $request->txtDescription_eg;

    	if ($request->status == 'on') {
    		$postNew->status = 1;
    	}else {
    		$postNew->status = 0;
    	}

    	$postNew->id_catepost = $request->txtProductCate;

    	$img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/hinhanh/post/new';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $postNew->photo = $img_name;
        }
        $banner = $request->file('fImagesbn');
        if(!empty($banner)){
            $path_img='upload/hinhanh/post/new';
            $img_name=time().'-'.$banner->getClientOriginalName();
            $banner->move($path_img,$img_name);
            $postNew->bannertop = $img_name;
        }
    	$postNew->save();
    	return redirect('backend/new')->with('status','Cập nhật thành công'); 
    }
	public function deleteList($id)
    {
        $idPost = explode(",", $id);
        foreach ($idPost as $item) {
            $post = PostNew::findorfail($item);
            $post->destroy($item);
        }
        return back()->with('status','Xóa thành công !'); 
    }
}
