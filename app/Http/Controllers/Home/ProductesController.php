<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductesController extends Controller
{
    //遍历商品
    public function show($id)
    {
    	// 所有商品
    	$list = \DB::table('shop_goods')->where('cateid',$id)->paginate(1);
    	// dd($list);
    	// 推荐商品
    	$recommend = \DB::table('shop_goods')->where('activity',2)->get();

    	// dd($recommend);
    	// 所有分类
    	$lei = \DB::select("select *,concat(path,id) as newpath from shop_categorys order by newpath");
    	// dd($lei);
    	// 顶级分类
    	$dlei = \DB::table('shop_categorys')->where('pid',0)->get();
    	// dd($dlei);
    	
    	$zlei = \DB::table('shop_categorys')->where('pid','!=',0)->get();
    	// dd($zlei);
    	// $slei = \DB::select("select * from shop_categorys where pid = ".);
    	// dd($data);

    	return view('./home/products',['list'=>$list,'recommend'=>$recommend,'lei'=>$lei,'dlei'=>$dlei,'zlei'=>$zlei]);
    	// return '遍历';
    }
}
