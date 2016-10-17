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
    	// 商品帮助
	$list = \DB::table('shop_help')->get();
		// 品牌
	$data = \DB::table("shop_brands")->get();
    // dd($data);
    // $brand = \DB::table('shop_brands')->get();
    
    // 所有产品
    $newproduct = \DB::table('shop_goods')->get();
    // dd($newproduct);
    // 分类
    $category = \DB::select("select * from shop_categorys where pid != 0");
    // dd($category);
    // 顶级层分类
    $pid = \DB::table('shop_categorys')->where('pid',0)->get();
    // dd($pid);
    // 子类
    $zid = \DB::select("select * from shop_categorys where pid != path");
    // dd($zid);
    // 将子类和顶级类 写在一条
    $lei = \DB::select("select *,concat(path,id) as newpath from shop_categorys order by newpath");
    // dd($lei);
	// return view("/home/index",["list"=>$list,'data'=>$data,'newproduct'=>$newproduct,'category'=>$category,'pid'=>$pid]);
    // 推荐商品
    $recommend = \DB::table('shop_goods')->where('activity',2)->get();
    // dd($recommend);

    // 限时抢购
    $timerob = \DB::table('shop_goods')->where('activity',3)->where('state','!=','3')->get();
    // dd($timerob);
    // 单条
    $first = \DB::table('shop_goods')->where('activity',3)->where('state','!=','3')->first();
    // dd($first);
    
     return view("/home/index",["list"=>$list,'data'=>$data,'newproduct'=>$newproduct,'lei'=>$lei,'recommend'=>$recommend,'timerob'=>$timerob,'first'=>$first]);
	}
}
