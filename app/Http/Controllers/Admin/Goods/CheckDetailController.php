<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckDetailController extends Controller
{
    //查
    public function index(Request $request)
    {
    	
    	// $list = \DB::table('shop_goodsdetail')->get();
    	// $list = \DB::select("select * from shop_goodsdetail order by id");

    	// dd($list);
        $db = \DB::table('shop_goodsdetail');
        $where = [];    //将搜索条件 保存至数组   
        if($request->has('name')){
            $name=$request->input('name');
            // dd($name);
            $db->where('goodsname','like',"%{$name}%");
            $where['name']=$name;
            // dd($where); 
        }
        $list = $db->orderBy('id')->Paginate(3);
        $num = count($list);
    	return view('./admin/goods/goods-detail',['list'=>$list,'num'=>$num,'where'=>$where]);
    	// return $id;
    }

    // 删除
    public function destroy($id)
    {
    	$m = \DB::table('shop_goodsdetail')->where('id',$id)->delete();
    	if($m > 0){
    		return redirect('/admin/goods/goods-detail');
    	}else{
    		return redirect('/admin/goods/goods-detail');
    	}
    	// return '删除';
    }
    // 修改
    public function edit($id)
    {
    	// return $id;
    	$list = \DB::table('shop_goodsdetail')->where('id',$id)->first();
    	// dd($list);
    	return view('./admin/goods/goods-update',['list'=>$list]);
    }
    // 执行修改
    public function update(Request $request,$id)
    {
    	$data = $request->only('gid','size','color','goodsname');
    	$color = $data['color'];
    	if($color == ''){
    		session(['msg'=>'颜色不能为空']);
    		return back();
    		// return '空的';
    	}else{
    		$m = \DB::table('shop_goodsdetail')->where('id',$id)->update($data);
    		if($m > 0){
    			session()->forget('msg');
    			return redirect('/admin/goods/goods-detail');
    		}else{
    			return back();
    			// return '失败';
    		}
    		// return '能改';
    	}
    	// return $id;

    }

}
