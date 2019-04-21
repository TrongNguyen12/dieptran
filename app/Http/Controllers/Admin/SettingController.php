<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Setting;
use App\Models\About;
use App\Models\moreImages;
class SettingController extends Controller
{
    public function getSetting()
    {
		$bntrangdv = moreImages::where('type', 'bndv')->first();
		$bntrangnews = moreImages::where('type', 'bnnew')->first();
		$bntrangTT = moreImages::where('type', 'bnTT')->first();
		$bntrangLH = moreImages::where('type', 'bnLH')->first();
    	$data = Setting::first();
        return view('backend.setting.edit', compact('data', 'bntrangdv', 'bntrangnews', 'bntrangTT', 'bntrangLH'));
    }
    public function postSaveSetting(Request $request)
    {
		//dd($request->all());
		$bntrangdv = $request->file('bntrangdv');
		if(!empty($bntrangdv)){
			$path_img='upload/hinhanh/banner';
			$img_name=time().'_'.$bntrangdv->getClientOriginalName();
			$bntrangdv->move($path_img,$img_name);
			moreImages::where('type', 'bndv')->update(['name' => $img_name]);
		}
		$bntrangnews = $request->file('bntrangnews');
		if(!empty($bntrangnews)){
			$path_img='upload/hinhanh/banner';
			$img_name=time().'_'.$bntrangnews->getClientOriginalName();
			$bntrangnews->move($path_img,$img_name);
			moreImages::where('type', 'bnnew')->update(['name' => $img_name]);
		}
		
		$bntrangTT = $request->file('bntrangTT');
		if(!empty($bntrangTT)){
			$path_img='upload/hinhanh/banner';
			$img_name=time().'_'.$bntrangTT->getClientOriginalName();
			$bntrangTT->move($path_img,$img_name);
			moreImages::where('type', 'bnTT')->update(['name' => $img_name]);
		}
		$bntrangLH = $request->file('bntrangLH');
		if(!empty($bntrangLH)){
			$path_img='upload/hinhanh/banner';
			$img_name=time().'_'.$bntrangLH->getClientOriginalName();
			$bntrangLH->move($path_img,$img_name);
			moreImages::where('type', 'bnLH')->update(['name' => $img_name]);
		}
    	$setting = DB::table('setting')->select()->first();
    	$data = Setting::find($setting->id);
        if(!empty($data)){
            $img = $request->file('fImages');
            if(!empty($img)){
                $path_img='upload/hinhanh/logo';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $data->logo = $img_name;
            }
            $img2 = $request->file('fImagesFavico');
            if(!empty($img2)){
                $path_img2='upload/hinhanh/logo';
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img2,$img_name2);
                $data->favico = $img_name2;
            }
            $data->name = $request->txtName;
            $data->didong =$request->txtPhone2;
            $data->nameeg = $request->txtName_eg;
            $data->companyeg = $request->txtCompanyEG;
            $data->company = $request->txtCompany;
            $data->links1 = $request->links1;
            $data->links2 = $request->links2;
            $data->links3 = $request->links3;
            $data->links4 = $request->links4;
            $data->links5 = $request->links5;
            $data->phone = $request->txtPhone;
            $data->contentcode = $request->contentcode;
            $data->contentcodeeg = $request->contentcode_eg;
            $data->copyright = $request->copyright;
            $data->codemap = $request->maps;
            $data->email = $request->txtEmail;
            $data->analytics = $request->txtAnalytics;
            $data->content = $request->content;
            $data->contenteg = $request->content_eg;
            $data->address = $request->adress;
            $data->addresseg = $request->adress_eg;
            $data->title = $request->txtTitle;
            $data->keyword = $request->txtKeyword;
            $data->description = $request->txtDescription;
            $data->titleeg = $request->txtTitle_eg;
            $data->keywordeg = $request->txtKeyword_eg;
            $data->descriptioneg = $request->txtDescription_eg;
			
			
			


            
            $data->save();
            return redirect('backend/setting')->with('status','Cập nhật thành công');
        }else{
            return redirect('backend')->with('status','Cập nhật dữ liệu lỗi');
        }
    }
    public function getAbout()
    {
        $data['data'] = About::first();
        return view('backend.about.edit', $data);
    }
    public function postAbout(Request $request)
    {
        $about = About::first();
        $about->name = $request->txtName;
        $about->nameeg = $request->txtName_eg;
        $about->title = $request->txtTitle1;
        $about->titleeg = $request->txtTitle1_eg;
        $about->content = $request->txtContent;
        $about->contenteg = $request->txtContent_eg;

        $about->titlecontent1 = $request->txtTitleContent1;

        $about->content1 = $request->txtContent1;

        $about->titlecontent1eg = $request->txtTitleContent1eg;

        $about->content1eg = $request->txtContent1eg;

        $about->titlecontent2 = $request->txtTitleContent2;

        $about->titlecontent2eg = $request->txtTitleContent2eg;

        $about->content2 = $request->txtContent2;

        $about->content2eg = $request->txtContent2eg;

        $about->titleseo = $request->txtTitleseo;
        $about->titleseoeg = $request->txtTitleseoeg;
        $about->keywordseo = $request->txtKeywordseo;
        $about->keywordseoeg = $request->txtKeywordseoeg;
        $about->descriptionseo = $request->txtDescriptionseo;
        $about->descriptionseoeg =  $request->txtDescriptionseoeg;

        $about->namhd = $request->txtNamHD;
        $about->duanHT = $request->txtDAHT;
        $about->khthanthiet = $request->txtKHTT;
        
        $about->save();
        return back()->with(['toastr_lvl' => 'success', 'toastr_msg' => ' Cập nhật thành công!']);
    }
}
