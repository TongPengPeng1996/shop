<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;//使用验证码的类

class LoginController extends Controller
{
    //显示登录页
	public function login()
	{
		//加载登录页的视图
		return view('/home/login');
	}
	
	//执行登陆
	public function dologin(Request $request)
	{
		//用户输入的验证码值
		$usercode = $request->input('code');
		//获取图片验证码的值
		$imgcode = session()->get('code');
		if($usercode != $imgcode){
			return back()->with('msg','验证码输入有误');
		}
		
		$username = $request->input('username');
		$password = $request->input('password');
		$data = \DB::table('shop_users')->where([['username',$username],['state',1]])->first();
		//将用户信息存入session
		session(['homeuser'=>$username]);
		if($data){
			if($password == $data->password){
				return redirect('/');
			}
		}else{
			return back()->with('msg','用户名或密码错误');
		}
	}
	
	//点击更换验证码的图片
	public function check($tmp)
	{
		//实例化验证码类
		$builder = new CaptchaBuilder;
		//设置显示验证码的宽高
		$builder->build($width=150,$height=32,$font=null);
		//获得验证码的值
		$session = $builder->getPhrase();
		//闪存数据到session
		session()->flash('code',$session);
		//输出
		return response($builder->output())->header('Content-type','image/jpeg');		
	}
	
	public function logout()
	{
		session()->forget('homeuser');
		return redirect('/home/login');
	}
}
