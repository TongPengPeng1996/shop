<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecycleController extends Controller
{
    //显示主页
    public function index()
    {
    	// $list = \DB::table('shop_goods')->get();
        $db = \DB::table('shop_goods');
        // $list = \DB::select(" select *,shop_categorys.id,shop_goods.id as gid from shop_categorys,shop_goods where shop_goods.cateid = shop_categorys.id and shop_goods.state = 3");
        $list = \DB::table('shop_categorys')
                    ->join('shop_goods','shop_categorys.id','=','shop_goods.cateid')
                    ->where('shop_goods.state','3')
                    ->select('shop_categorys.*','shop_goods.*')
                    ->paginate(1);
        // $list = $db->paginate(1);
        // dd($list);
        $num = count($list);
        // $num = $count[0]->num;
        // dd($count);
    	return view('/admin/goods/recycle',['list'=>$list,'num'=>$num]);
    }

}
