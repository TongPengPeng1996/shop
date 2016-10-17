<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //订单表
    public function index()
    {
        // return '000';
    	return view(".home.single");
    }

    //订单详情
    public function store($id)
    {	
    	dd($id);
    	// return 'aaaaaa';
    	// return view(".home.ok-order");
    }
}
