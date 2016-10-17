<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //创建 
	public function create()
	{
		return view('./admin/goods/category-add');
		// return '添加';
	}
	// 执行添加
	public function store(Request $request)
	{
		$data = $request->input('catename');
		// dd($data);
		$list = \DB::table('shop_categorys')->get();
		// dd($list);
		$arr = array();
		foreach($list as $value){
			$arr[] = $value->catename;
		}
		// dd($arr);
		if(in_array($data,$arr)){
			session(['msg'=>'分类名已存在']);
			// return '存在';
		}else{
			$m = \DB::table('shop_categorys')->insert(array(['catename'=>$data,'path'=>'0,','pid'=>'0']));
			if($m > 0){
				return redirect('/admin/goods/product-categorys');
				// return '成功';
			}else{
				return redirect('/admin/goods/product-categorys');
			}
			// return '可以添加';
		}

	}


}
