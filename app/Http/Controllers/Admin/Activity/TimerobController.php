<?php

namespace App\Http\Controllers\Admin\Activity;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimerobController extends Controller
{
    //修改为限时抢购
    public function update(Request $request,$id)
    {
    	// 执行修改activity = 3;
    	$m = \DB::table('shop_goods')->where('id',$id)->update(['activity'=>3]);
    	if($m > 0){
    		return redirect('/admin/timerob');
    	}else{
    		return redirect('/admin/goods/commodity-list');
    	}
    	// return $id;

    }
    // 取消
    public function show($id)
    {
        $m = \DB::table('shop_goods')->where('id',$id)->update(['activity'=>1]);
        if($m > 0){
            return redirect('/admin/timerob');
        }else{
            return redirect('/admin/goods/commodity-list');
        }
        // return $id;
    }
    // 显示商品限时抢购
    public function index()
    {
        $list= \DB::table('shop_categorys')
                    ->join('shop_goods','shop_goods.cateid','=','shop_categorys.id')
                    ->select('shop_categorys.*','shop_goods.*')
                    ->where('shop_goods.state','!=','3')
                    ->where('shop_goods.activity','=','3')
                    ->orderBy('shop_goods.id')
                    ->Paginate(2);
            // dd($list);
        $num = count($list);
        return view('./admin/recommend/timerob-list',['list'=>$list,'num'=>$num]);
    }

}
