<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsDetailController extends Controller
{
    //添加详情
    public function edit($gid)
    {
    	// return $id;
    	$goods = \DB::table('shop_goods')->where('id',$gid)->first();
    	// dd($goods);
    	return view('./admin/goods/goods-info',['goods'=>$goods]);
    	// return 'as';
    }
    // 执行添加详情
    public function update(Request $request,$gid)
    {
    	$data = $request->only('size','color','gid','goodsname');
    	// $data = $request->all();
    	// dd($data);
    	

    	// dd($list);
    	$m = \DB::table('shop_goodsdetail')->insert($data);
    	if($m > 0){
    		return redirect('admin/goods/commodity-list');
    		// return '加了';
    	}else{
    		return redirect('admin/goods/commodity-list');
    		// return '加错了';
    	}
    	// return '添加了啊';
    }

}
