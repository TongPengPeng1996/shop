<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
	public function index()
	{
		return view('/home/register');
	}
	
	//Ajax的验证
    public function find(Request $request)
	{
		//获取Ajax传过来的值
		$name = $request->input('username');
		//查询数据库是否存在这个用户
		$info = \DB::table('shop_users')->where('username',$name)->first();
		//$names = $info[0]->username;
		//dd(settype($info,'string'));
		if($info){
			$data = '用户名以存在';
		}else{
			$data = '用户名不存在';
		}
		return $data;
	}
	
	//注册用户的信息
	public function store(Request $request)
	{
		//获取注册的信息
		$data = $request->all();
		//移除token值
		unset($data['_token']);
		//执行添加操作
		$row = \DB::table('shop_users')->insert($data);
		//判断是否插入成功
		if($row > 0){
			return view('/home/login');
		}else{
			return redirect('/home/register');
		}
	}

	
}
