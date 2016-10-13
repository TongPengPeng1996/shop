<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Gregwar\Captcha\CaptchaBuilder; //加载验证码类 

class CodeController extends Controller
{
    //输出验证码
    public function index()
    {
    	$builder = new CaptchaBuilder;
    	$builder->build(150,32);
    	$session = $builder->getPhrase();
    	session(['code'=>$session]);
    	return response($builder->output())->header('Content-type','image/jpeg');
    }
}
