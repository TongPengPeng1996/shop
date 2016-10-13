<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //显示页面
    public function index()
    {
        $type = \DB::table('shop_categorys')->get();
    	return view('/admin/goods/type',['type'=>$type]);
    }
    // 创建
    public function store(Request $request)
    {
    	$catename = $request->only('catename');
        $pid = $request->input('cateid');
        // dd($pid);
        $cate = \DB::table('shop_categorys')->where('id',$pid)->first();
        // dd($cate->path);
        $path = $cate->path;
        $newpath = $path.$pid.',';
        $name = $catename['catename'];
    	// if($catename['catename'] !== ''){
    	// 	echo '能加';
    	// }else{
    	// 	echo '不能加';
    	// }
    	// dd($catename['catename']);

    	$list = \DB::table('shop_categorys')->get();
    	// dd($list);
    	foreach($list as $k => $v){
    		// var_dump($catename['catename']);
    		// var_dump($v->catename);

    		
    		// var_dump($v);
    		// die();
    		// if($v != $catename){
    		// 	var_dump($catename);
    			// echo '<pre>';
    			// var_dump($v->catename);
    		// 	die();
    		// }else{
    		// 	die('执行');
    		// }
                // var_dump($name);
                // if($name == $v->catename){
                //     echo '一样';
                // }else{
                //     echo '不一样';
                // }
                // echo '<pre>';
            
            // dd($v->catename);
            // die();

    		if($name !== ''){
    			// 这里有问题
				if($name == $v->catename){
	    			// echo '存在';
	    			$type = '分类名已存在';
	    			session(['type'=>$type]);
                    return '分类名已存在';
	    			// return redirect('/admin/goods/type');
	    		}else{
                    $data = array('catename'=>$name,'pid'=>$pid,'path'=>$newpath);
                    // dd($data);
	    		     \DB::table('shop_categorys')->insert($data);
                    return redirect('/admin/goods/commodity-list');
	    			session()->forget('type');
	    			// return '已添加';
	    		}	
    		}else{
    			$type='分类名不能为空';
    			session(['type'=>$type]);
    			return redirect('/admin/goods/type');
    		}
    		
    	}
    	
    }
}
