<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\slider;
use App\Models\abouthome;
use App\Models\video;
use App\Models\Dichvu;
use App\Models\About;
use App\Models\ContacInfo;
use App\Models\PostNew;
use App\Models\Catepost;
use App\Models\Sevices;
use App\Models\moreImages;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
use DB;

class IndexController extends Controller
{
    //
    public function getHome()
    {
    	$data['listSlider'] = Slider::where([['type','=',1],['status','=', 1]])
    							->orderBy('stt', 'ASC')->get();
    	$data['textdescvi'] = abouthome::where('id', 1)->first();
        $data['textdesceg'] = abouthome::where('id', 2)->first();
    	$data['videovi'] = video::where('id_lg', 1)->get();
        $data['videoeg'] = video::where('id_lg', 2)->get();
    	$data['logodt'] = slider::where([['type','=',2],['status','=', 1]])->orderBy('stt', 'ASC')->get();
    	$data['listdv'] = Dichvu::where([['displayhome','=',1],['status','=', 1]])->get();
    	return view('pages.home', $data);
    }
    public function getContact()
    {
		$data['bnLH'] = moreImages::where('type', 'bnLH')->first();
        return view('pages.contact', $data);
    }
    public function getAbout()
    {
		
        $data['data'] = About::first();
        return view('pages.about', $data);
    }
    public function postSaveContact(Request $request)
    {
		
		$data = DB::table('setting')->select()->first();
		$email = explode("||", $data->email);
		
        $objDemo = new \stdClass();
        $objDemo->name = 'Nguyễn Văn Trọng';
        $objDemo->phone = '09894576845';
        $objDemo->email = 'email@gmail.com';
        $objDemo->subject = 'Tiêu Đề';
        $objDemo->content = 'Nội dung';
        Mail::to($email)
                ->send(new SendMailable($objDemo));
        $contact = new ContacInfo;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->Email;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->status = 0;
        $contact->save();
        return back()->with('status', 'Gửi Thông Tin Thành Công !');

    }
    public function getPostNew()
    {
		$data['bntrangnews'] = moreImages::where('type', 'bnnew')->first();
        $data['data'] = PostNew::with('Catepost')->whereNotIn('id_catepost', [6])->orderBy('id', 'DESC')->paginate(6);
        return view('pages.post', $data);
    }
    public function getPostbdetail($slug, $id)
    {
       // tách để lấy id
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids); 
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1); // id để xử lý
        $menu_aty=$minlink;
        if($minlink == 'p'){ 
            $data['data'] = PostNew::with('Catepost')->where('id' , $cat_id )->first();
            $data['listPost'] = PostNew::with('Catepost')->where('id_catepost' , $data['data']->id_catepost )
                                                       ->where('id', '<>' , $cat_id) 
                                                        ->take(6)->get();
            //dd($data['listPost']);
            return view('pages.bdetail', $data);
        }
    }
    public function getPostByCat($slug, $id)
    {
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids); 
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1); // id để xử lý
        $menu_aty=$minlink;
        if($minlink == 'p'){ 
            $data['data'] = PostNew::with('Catepost')->where('id_catepost' , $cat_id)->orderBy('id')->paginate(6);
            $data['cat_id'] = $cat_id;
			$data['bntrangnews'] = moreImages::where('type', 'bnnew')->first();
            return view('pages.catpost', $data);
        }
    }
    public function getPostRecruitment()
    {
		$data['bntrangTT'] = moreImages::where('type', 'bnTT')->first();
        $data['data'] = PostNew::with('Catepost')->where('id_catepost', 6)
                                ->orderBy('id', 'DESC')->paginate(6);
        return view('pages.tuyendung', $data);
    }
    public function getDetailPostRecruitment($slug, $id)
    {
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids); 
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1); // id để xử lý
        $menu_aty=$minlink;
        if($minlink == 'p'){ 
            $data['data'] = PostNew::with('Catepost')->where('id' , $cat_id )->first();
            $data['listPost'] = PostNew::with('Catepost')->where('id_catepost' , $data['data']->id_catepost )->take(6)->get();
            //dd($data['listPost']);
            return view('pages.tuyendungdtail', $data);
        }
    }
    public function getSevices()
    {
		$data['bntrangdv'] = moreImages::where('type', 'bndv')->first();
        $data['listImages'] = moreImages::all();
        $data['listSevices'] = Dichvu::where('status', 1)->get();
        return view('pages.dichvu', $data);   
    }
    public function getDetailSevices($slug, $id)
    {
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids); 
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1); // id để xử lý
        $menu_aty=$minlink;
        if($minlink == 'p'){
            $data['dvkhac'] = Dichvu::where('status', 1)
                ->where('id', '<>', $cat_id)
                ->take(2)->get();
            $data['listSevices'] = Sevices::with('Dichvu')->where('id_cateSevice', $cat_id)->get();
            $data['listImages'] = moreImages::where('id_cat', $cat_id)->get();
            if(!$data['listSevices']->isEmpty()){
                return view('pages.sevices', $data);
            }else {
                return back();
            }
        }
    }
    public function getLoadMorePost(Request $request)
    {
        if($request->type == 'tuyendung'){
            $data['data'] = PostNew::with('Catepost')->where('id_catepost', 6)->orderBy('id', 'DESC')->paginate(6);
            if($data['data']->isEmpty()){
                echo 'false';
            }else {
                return view('pages.ajax.tuyendungitem', $data)->render(); 
            }
        }else {
            if(isset($request->cat_id)){
                $data['data'] = PostNew::with('Catepost')->where('id_catepost' , $request->cat_id)->orderBy('id')->paginate(6);
            }else {
                $data['data'] = PostNew::with('Catepost')->whereNotIn('id_catepost', [6])->orderBy('id', 'DESC')->paginate(6);
                if($data['data']->isEmpty()){
                   echo 'false';
                }else {
                    return view('pages.ajax.postitem', $data)->render(); 
                }
            }
        }
    }
}
