<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image; //使用第三方扩展实现图片压缩

class AddgoodsController extends Controller
{
    //显示
    public function index()
    {
    	$list = \DB::table('shop_categorys')->get();
    	// dd($list);
    	$type = array();
    	foreach($list as $v){
    		$type[] = $v;
    	}
    	$i = count($type);
    	// $path = $type[($i-1)]->path;
    	// $j = strlen($type[($i-1)]->path);
    	// dd($name);
    	// dd($type);
    	// dd($path);
    	
    	return view('./admin/goods/product-add',['type'=>$type]);
    }
    // 创建
    public function store(Request $request)
    {
    	// dd($request);
    	$list = $request->only('proname','cateid','state','price','store','descript','image');
    	// $list = $request->all();
    	$proname = $list['proname'];
    	$cateid = $list['cateid'];
    	$state = $list['state'];
    	$price = $list['price'];
    	$store = $list['store'];
    	$descript = $list['descript'];
    	
    	// dd($list['image']);
        // 图片上传
        $file = $request->file('image');
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();   //获得前缀
            // dd($ext);
            $filename = time().rand(1000,9999).'.'.$ext;    //新文件名
            $file->move('./uploads/',$filename);     //移动到uploads下
        }
        // 使用第三方插件执行图片缩放
        $img = Image::make('./uploads/'.$filename)->resize(100,100);  //打开资源，定义图片大小
        $img->save("./uploads/s_".$filename);  //另存为图片
        $image = $filename;
        // dd($image);
        // dd($file);
    	// dd($image);
    	$res = \DB::table('shop_goods')->get();
    	// dd($res);
    	$goods = array();
    	foreach($res as $k => $value){
    		$goods[]=$value->proname;
    	}
    	// dd($goods);
    	$proname = $request->input('proname');
    	// dd($proname);
        // if(in_array($proname,$goods)){
        //     return '存在';
        // }else{
        //     return '可以添加';
        // }
        
        
    	// dd($goods[0]->proname);
    	// $goods_proname = $goods->proname;
     //    dd($goods_proname);
    	// if($proname == $aa){
    	// 	dd($proname);
    	// }else{
    	// 	die('可以添加');
    	// }
    	// 如果商品名存在，那么不允许添加
    	if(in_array($proname,$goods)){
    		session(['msg'=>'商品名已存在']);
    		return redirect('/admin/goods/product-add');
    		// return '存在';
    		
    	}else{
    		// dd($list);
    		// return 'asdas';
    		$time = time();

			// $add = \DB::table('shop_goods')->insert([['proname'=>$proname],['cateid'=>$cateid],['state'=>$state],['price'=>$price],['store'=>$store],['descript'=>$descript],['image'=>$image],]);
			$add = \DB::table('shop_goods')->insert(['proname'=>$proname,'cateid'=>$cateid,'state'=>$state,'price'=>$price,'store'=>$store,'descript'=>$descript,'image'=>$image,'addtime'=>$time]);
			
			// $add = \DB::table('shop_goods')->insert($list);
			session()->forget('msg');
			return redirect('/admin/goods/commodity-list');
    		// return '成功';
    	}
    }
}
