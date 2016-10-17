<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdjustController extends Controller
{
    //显示adjust页面
    public function index()
    {
    	// return('aaa');
    	//查询数据库
    	$name = session('homeuser');
    	// dd($name);
    	$list = \DB::select("select id from shop_users where username = '$name'");
    	// dd($list);
    	$id = $list['0'];
    	$d = $id->id;
        // dd($d);
    	$list = \DB::select("select * from shop_address where uid = '$d'");
    	// dd($sql);
    	
    	return view('home.adjust',["list"=>$list]);
    }
    //添加的页面
    public function create()
    {
    	return view('home.addressx');
    }
    //添加
    public function store(REQUEST $request)
    {   
        //取得到值
    	$data = $request->only("name","Telephone","ReceiptAddress","ReceivingTime");
    	// $data = $request->all();
    	// dd($data);
    	$address = $data['ReceiptAddress'];
    	$az = \DB::table('district')->where('id',$address)->first();
    	//判断是3个下拉框的地址还是4个下拉框的地址
        if($az->id >'5024'){
    	// dd($data);
    	// dd($list);
        //4个下拉框的地址
    	$azd = $az->upid;
    	// dd($add);
    	$ax = \DB::table('district')->where('id',$azd)->first();
    	// dd($as);
    	$axd = $ax->upid;
    	$as = \DB::table('district')->where('id',$axd)->first();
    	// dd($as);
    	$asd = $as->upid;
    	$aad = \DB::table('district')->where('id',$asd)->first();
    	$add = $aad->name.$as->name.$ax->name.$az->name;
    	// dd($add);
    }else{
        //3个下拉框的地址
    	// $az = \DB::table('district')->where('id',$address)->first();
    	// dd($list);
    	$azd = $az->upid;
    	// dd($add);
    	$as = \DB::table('district')->where('id',$azd)->first();
    	// dd($as);
    	$asd = $as->upid;
    	$aad = \DB::table('district')->where('id',$asd)->first();
    	$add = $aad->name.$as->name.$az->name;
    	// dd($add);
    }
     $data['ReceiptAddress'] = $add;
     // dd($data);
     $name = session('homeuser');
    // dd($name);
     $id = \DB::select("select id from shop_users where username = '$name'");

     $iid = $id['0'];
    
     $data['uid'] = $iid->id;
     // dd($data);
     $sql = \DB::table('shop_address')->insert($data);
     // return 'x';
     return redirect('/home/adjust');

    }
    //修改地址
    public function edit($id)
    {
    	// return 'adsa';
    	// 获得需要修改的数据
        $list = \DB::table("shop_address")->where('id',$id)->first();//获得单条信息
    	// dd($shop->title);
    	return view('home.adjust-update',['list'=>$list]);
    }
    //修改地址
   public function update(REQUEST $request, $id)
   	{
   		//获取需要修改值
   		// return 'aaaaa';
   		$data = $request->only("name","Telephone","ReceiptAddress","ReceivingTime");
   		// 执行修改 
        \DB::table("shop_address")->where("id",$id)->update($data);
        // 跳
        return redirect("/home/adjust");
   		// dd($id);

   	}
     // 删除地址
    public function destroy($id)
    {
    	// return "执行删除".$id;
    	//1执行删除
    	\DB::table('shop_address')->where('id',$id)->delete();//删除指定的id
   		//2 删除后执行跳转
   		return redirect("/home/adjust");
    }
}
