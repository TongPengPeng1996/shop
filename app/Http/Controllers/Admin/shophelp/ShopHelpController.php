<?php

namespace App\Http\Controllers\admin\shophelp;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopHelpController extends Controller
{
    //查询商城帮助
    public function index()
    {
    	//链接数据库
    	// return 'asdsad';
    	$list = \DB::table('shop_help')->get();
    	// dd($list);
    	return view('admin.shop-help.shop-help',["list" => $list]);
    }

    //跳转商城帮助
    public function create()
    {
    	// return 'sad';
    	return view('admin.shop-help.shophelp-add');
    }

    //添加商城帮助
    public function store(Request $request)
    {
    	// return '执行添加';
    	//获得指定的下标对应的值 
    	$data = $request->only("title","descript");
    	//写入数据库
    	$id = \DB::table("shop_help")->insertGetId($data);
        return redirect('/admin/shop-help/shop-help');
    	
   
    }

    //修改商城帮助
    public function edit($id)
    {
    	// return 'adsa';
    	// 获得需要修改的数据
        $shop = \DB::table("shop_help")->where('id',$id)->first();//获得单条信息
    	// dd($shop->title);
    	return view('admin.shop-help.shophelp-update',['shop'=>$shop]);
    }

    //修改商城帮助
    public function update(REQUEST $request, $id)
    {
    	// return 'asdsadasd';
        // 接收表单提交的值 
        $data = $request->only("title","descript");

        // 执行修改 
        \DB::table("shop_help")->where("id",$id)->update($data);
        // 跳
        return redirect("/admin/shop-help/shop-help");
    }
    // 删除商城帮助
    public function destroy($id)
    {
    	// return "执行删除".$id;
    	//1执行删除
    	\DB::table('shop_help')->where('id',$id)->delete();//删除指定的id
   		//2 删除后执行跳转
   		return redirect("/admin/shop-help/shop-help");
    }

}
