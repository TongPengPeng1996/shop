<?php

namespace App\Http\Controllers\Admin\Activity;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecommendController extends Controller
{
    //执行修改为推荐商品
    public function update(Request $request,$id)
    {

    	// $list = \DB::table('shop_goods')->where('id',$id)->first();
    	// dd($list);
    	$m = \DB::table('shop_goods')->where('id',$id)->update(['activity'=>2]);
    	// return $id.'activity修改成1';
    	if($m > 0){
    		return redirect('/admin/goods/commodity-list');
    		// return '成功';
    	}else{
    		return redirect('/admin/goods/commodity-list');
    		// return '失败';
    	}
    }

    // 修改为普通商品
    public function show($id)
    {
    	$m = \DB::table('shop_goods')->where('id',$id)->update(['activity'=>1]);
    	if($m > 0){
    		return redirect('/admin/goods/commodity-list');
    		// return '成功';
    	}else{
    		return redirect('/admin/goods/commodity-list');
    		// return '失败';
    	}
    	// return $id.'为普通';
    }
    // 显示
    public function index(Request $request){
    	// $list = \DB::select("select *,shop_categorys.id,shop_goods.id as gid from shop_categorys,shop_goods where shop_goods.cateid = shop_categorys.id and shop_goods.state != 3 and shop_goods.activity = 2");
    	// dd($list);
        
       
        $db = \DB::table('shop_goods')->join('shop_categorys','shop_goods.cateid','=','shop_categorys.id');
         // $list= \DB::table('shop_goods')
         //            ->join('shop_categorys','shop_goods.cateid','=','shop_categorys.id')
         //            ->select('shop_categorys.*','shop_goods.*')
         //            ->where('shop_goods.state','!=','3')
         //            ->where('shop_goods.activity',2)
         //            ->orderBy('shop_goods.id')
         //            ->Paginate(2);
        $list = $db
                ->select('shop_categorys.*','shop_goods.*')
                ->where('shop_goods.state','!=','3')
                ->where('shop_goods.activity',2)
                ->orderBy('shop_goods.id')
                ->Paginate(2);
        // dd($list);
        /*搜索*/
        // $where = [];    //将搜索条件 保存至数组   
        // if($request->has('proname')){
        //     $name=$request->input('proname');
        //     // dd($name);
        //     $db->where('shop_goods.proname','like',"%{$name}%");
        //     $where['proname']=$name;
        //     // dd($where); 
        // }
        // dd($list);
    	$num = count($list);
    	// dd($num);
    	return view('./admin/recommend/recommend-list',['list'=>$list,'num'=>$num]);
    }

}
