<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContacInfo;
class ContacController extends Controller
{
    public function getListContact()
    {
    	$data['data'] = ContacInfo::all();
    	return view('backend.contact.list', $data);
    }
    public function getViewContact(Request $request)
    {
    	$id = $request->id;
    	$contac = ContacInfo::findOrFail($id);
    	$contac->status = 1;
    	$contac->save();

    	$data['data'] = ContacInfo::where('id', $id)->first();
    	return view('backend.contact.show', $data);
    }
	public function getDeleteContact(Request $request)
	{
		$id = $request->id;
		$contac = ContacInfo::findOrFail($id);
		$contac->delete();
		return back();
	}
	public function deleteList($id){
		$idPost = explode(",", $id);
		foreach ($idPost as $item) {
            $cate = ContacInfo::findOrFail($item);
            $cate->destroy($item);
        }
		return back();
	}
}
