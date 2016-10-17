<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    //显示到购物车
    public function show(Request $request,$id)
    {
    	// dd($request->all());
    	// dd($id);
    	// return $id;
        // 商品的id
    	$goods = \DB::table('shop_goods')->where('id',$id)->first();
    	// dd($list);
    	$detail = \DB::table('shop_goodsdetail')->where('gid',$id)->first();
        // 商品id
        $gid = $goods->id;
        // 详情id
        $did = $detail->id;
        // 单价
        $price =  $goods->price;
        // 查询用户id
        $username = session('homeuser');
        $user = \DB::table('shop_users')->where('username',$username)->first();
        // dd($user);
        // 用户id (uid)
        $uid = $user->id;

        // 要插入数据
        $data = array('gid'=>$gid,'did'=>$did,'totalprice'=>$price,'uid'=>$uid);
        // dd($data);
        // 查询数据是否存在
        $sel = \DB::table('shop_cat')->where('shop_cat.uid',$uid)->get();
        // dd($sel);

        
        // 购物车只能写一个
        foreach($sel as $va){
            if($data['gid'] == $va->gid){
            
                return back();
            }
        }

        $m = \DB::table('shop_cat')->insert($data);
        if($m > 0){
            return back();
            // return '成功';
        }else{
            return back();
            // return '失败';
        }
        // select * from shop_goods,shop_goodsdetail,shop_cat where shop_goods.id = shop_cat.gid and shop_goodsdetail.id = shop_cat.did
    	// return view('./home/checkout',['list'=>$list,'data'=>$data]);
    	// return '显示购物车';
    }
    // 显示
    public function index()
    {
        $username = session('homeuser');
        $user = \DB::table('shop_users')->where('username',$username)->first();
        // dd($user);
        // 用户id (uid)
        $uid = $user->id;
        // dd($uid);
        $list = \DB::table('shop_cat')
                    ->join('shop_goods','shop_cat.gid','=','shop_goods.id')
                    ->join('shop_goodsdetail','shop_cat.did','=','shop_goodsdetail.id')
                    ->where('shop_cat.uid',$uid)
                    ->select('shop_goods.*','shop_goodsdetail.*','shop_goods.id as ggid','shop_cat.gid as cgid','shop_cat.*','shop_cat.id as cid')
                    ->get();
        
       // dd($list) ;
       // $aa = \DB::table('shop_cat')->where('shop_cat.uid',$uid)->first();
       // dd($aa);
        return view('./home/checkout',['list'=>$list]);
    }
    // 删除 
    public function destroy($id)
    {
        // return $id.'删除';
        $m = \DB::table('shop_cat')->where('id',$id)->delete();
        if($m > 0){
            return redirect('/home/checkout');
        }else{
            return redirect('/home/checkout');
        }
    }

    // 结款提交订单
    // 存入购物车表 -> 添加到订单表，详情表 -> 再删除 购物车表
    public function update(Request $request,$id)
    {
        // 数量没拿到
        $data = $request->all();
        // dd($data);

        $cat = \DB::table('shop_cat')->where('id',$id)->first();
        // dd($cat);

        $uid = $cat->uid;   //用户id
         $gid = $cat->gid;   //商品id
          $did = $cat->did;   //详情id
          // 商品
          $goods = \DB::table('shop_goods')
                        ->where('shop_goods.id',$gid)
                        ->first();
            // dd($goods);
            // 详情
            $detail = \DB::table('shop_goodsdetail')
                        ->where('shop_goodsdetail.id',$did)
                        ->first();
            // dd($detail);

             //查询数据库
        $name = session('homeuser');
        // dd($name);
        $list = \DB::select("select id from shop_users where username = '$name'");
        // dd($list);
        $id = $list['0'];
        $d = $id->id;
        // dd($d);
        $sql = \DB::select("select * from shop_address where uid = '$d'");
         return view('/home/ok-order',['sql'=>$sql,'goods'=>$goods,'detail'=>$detail]);


    }


}
