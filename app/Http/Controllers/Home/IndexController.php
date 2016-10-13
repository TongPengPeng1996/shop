<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //友情链接
    public function index()
    {
    //获得所有的信息 //数据
    // return '123123123';
	$list = \DB::table('shop_help')->get();
    // dd($list);
	return view("/home/index",["list"=>$list]);
	}
}
