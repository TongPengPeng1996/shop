<?php

namespace App\Http\Controllers\admin\order;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //查询订单管理
    public function index()
    {
    	//链接数据库
    	$list = \DB::table('shop_orders')->get();
    	return view('admin.order.order-list',["list"=>$list]);
    }
}
