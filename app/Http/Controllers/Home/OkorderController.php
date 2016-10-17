<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OkorderController extends Controller
{
    //显示
    // public function show(Request $request,$id){
    // 	// return $id;

    // 	// dd($request->all());
    // 	$num = $request->input('num');
    // 	// dd($num);
    //     // session(['num'=>$num]);
    // 	$list = \DB::table('shop_goods')->where('id',$id)->first();
    // 	// dd($list);
    // 	$detail = \DB::table('shop_goodsdetail')->where('gid',$list->id)->first();
    // 	return view('./home/ok-order',['list'=>$list,'detail'=>$detail,'num'=>$num]);
    // }

    // 更改
    //查询多地址表
    public function index()
    {
        //查询数据库
        $name = session('homeuser');
        // dd($name);
        $list = \DB::select("select id from shop_users where username = '$name'");
        // dd($list);
        $id = $list['0'];
        $d = $id->id;
        // dd($d);
        $sql = \DB::select("select * from shop_address where uid = '$d'");
        // dd($sql);
        
        return view('home.ok-order',['sql' => $sql]);
    }
    //原本
    public function show($id)
    {   
        return '123';
        dd($id);
        $data = \DB::select("select * from shop_address where id = '$id'");
        
        // return($id);
        return json_encode($data);
    }


}

