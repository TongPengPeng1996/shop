<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DistrictWriteController extends Controller
{
    public function index()
    {
        // return 'xxxxxb';
        return view('home.ok-order');
    }

	//跳转添加地址
    public function create()
    {   
        // return '1111111';
    	// $name = session('homeuser');
    	// dd($name);
    	return view('home.address');
    }

    //往多地址表添加内容
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
     // return 'xx/';
     return redirect('/home/ok-order');

    }
}
