<?php

namespace App\Http\Controllers\admin\address;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    //查询多地址
    public function index()
    {	
    	//连接数据库
    	$list = \DB::table('shop_address')->get();
    	return view('.admin.address.address',["list"=>$list]);
    }


   	//修改多地址
   	public function edit($id)
   	{
   		// dd($id);
   		// 获得需要修改的数据
        $shop = \DB::table("shop_address")->where('id',$id)->first();//获得单条信息
    	
    	return view('admin.address.address-update',['shop'=>$shop]);
   	}

   	//修改多地址
   	public function update(REQUEST $request, $id)
   	{
   		//获取需要修改值
   		// return 'aaaaa';
   		$data = $request->only("name","Telephone","ReceiptAddress","ReceivingTime");
   		// 执行修改 
        \DB::table("shop_address")->where("id",$id)->update($data);
        // 跳
        return redirect("/admin/address/address");
   		// dd($id);

   	}
    //删除多地址
    public function destroy($id)
    {
    	// return('1111');
    	// 1执行删除
    	\DB::table('shop_address')->where('id',$id)->delete();//删除指定的id
   		// 2 删除后执行跳转
   		return redirect("/admin/address/address");
    }


}
