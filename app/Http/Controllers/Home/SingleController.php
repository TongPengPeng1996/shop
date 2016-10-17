<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SingleController extends Controller
{
    //显示页
    public function edit($id)
    {
    	// 单条点击的详情
    	$list = \DB::table('shop_goods')->where('id',$id)->first();
        
    	// 商品详情的
    	$detail = \DB::table('shop_goodsdetail')->where('gid',$list->id)->first();
    	// 所有商品的
    	$data = \DB::table('shop_goods')->get();
    	// dd($data);
        // 镇店之宝 非卖品
         $introduce =  \DB::table('shop_introduce')->get();

         //推荐商品
         $recommend = \DB::table('shop_goods')->where('activity',2)->get();

         // 分类
         $lei = \DB::select("select *,concat(path,id) as newpath from shop_categorys order by newpath");
    	return view('./home/single',['list'=>$list,'detail'=>$detail,'data'=>$data,'introduce'=>$introduce,'recommend'=>$recommend,'lei'=>$lei]);
    	// return '显示详情'.$id;
    }
}
