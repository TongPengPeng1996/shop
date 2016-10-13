<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
	{
		//查询数据
		$list = \DB::table('shop_news')->get();
		//分配资源
		return view('/home/blog',['list'=>$list]);
	}
}
