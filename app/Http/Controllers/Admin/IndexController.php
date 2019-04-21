<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\PostNew;

class IndexController extends Controller
{
    public function getHome()
    {
    	$data['data'] = PostNew::with('Catepost')->get();
    	return view('backend.index', $data);
    }
    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->intended('login');
    }
}
