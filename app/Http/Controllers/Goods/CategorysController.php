<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategorysController extends Controller
{
    //显示
    public function index()
    {
    	// $list = \DB::table('shop_categorys')->orderBy('path')->get();
    	// 全部的按级别排序
    	$list = \DB::select("select *,concat(path,id) as newpath from shop_categorys order by newpath");
    	// dd($list[0]->id);
        
    	//有商品的查询
    	// $list_s = \DB::select("select *,shop_categorys.catename,shop_categorys.id,shop_goods.cateid,concat(shop_categorys.path,shop_categorys.id) as newpath from shop_categorys,shop_goods where shop_goods.cateid = shop_categorys.id order by newpath");
    	// $data = $list->toArray();
        // dd($data);
        // $data = array();
        // foreach($list_s as $value){
        //     foreach($value as $k => $v){
        //         $data[] = $v;
        //         // $lis = \DB::select("select * from shop_categorys where pid = ".$data['id']);
        //     }
        // }
        // dd($lis);
        // dd($data);
    	// $lis = \DB::select("select * from shop_categorys where pid = ".$list[0]->id);
    	// dd($list);
    	// echo '<pre>';
    	// var_dump($list);+

    	// $list_s = \DB::select("select cateid from shop_goods");
    	// dd($list_s);
    	// $list = \DB::table('shop_categorys')->concat('path',',','id')->as('newpath')->orderBy('newpath')->get();
    	// $list = \DB::table('shop_categorys')->select(\DB::raw("concat('path',','id') as newpath,newpath"))->orderBy('newpath')->get();
    	// dd($list);
    	return view('./admin/goods/product-categorys',['list'=>$list]);
    	// return 'asd';
    }
    // 删除
    public function destroy($id)
    {
    	$m = \DB::table('shop_categorys')->where('id',$id)->delete();
    	if($m > 0){
    		return redirect('/admin/goods/product-categorys');
    		// return '删除成功';
    	}else{
    		// return '删除失败';
    		return redirect('/admin/goods/product-categorys');
    	}
    }
    // 增加（不用做有type控制器做了）
    // public function create()
    // {
    	// select *,shop_goods.cateid as cateid,shop_categorys.id as id,concat(shop_categorys.path,shop_categorys.id) as newpath from shop_categorys,shop_goods where cateid = id shop_ order by newpath

    // }
    // 修改显示
    public function edit($id)
    {
    	// return 'asds';
    	// redirect('/admin/goods/update');
    	$list = \DB::table('shop_categorys')->where('id',$id)->first();
    	// dd($list);
    	return view('./admin/goods/update',['list'=>$list]);
    }
    // 执行修改
    public function update(Request $request,$id)
    {
    	$catename = $request->input('catename');
    	// dd($catename);
    	// 为空不能修改
    	$sql = \DB::table('shop_categorys')->where('id',$id)->first();
    	$name = $sql->catename;
    	// dd($name);
    	if(empty($catename)){
    		$msg = '不能为空';
    		session(['catename'=>$msg]);
    		return back();
    	}else{
    		if($catename == $name){
    			$msg = '不能一样的名字';
	    		session(['catename'=>$msg]);
	    		return back();
    		}else{

    			$m = \DB::table('shop_categorys')->where('id',$id)->update(['catename'=>$catename]);
		    	if($m >0){
		    		// return '执行修改';
		    		session()->forget('msg');
		    		return redirect('/admin/goods/product-categorys');
		    	}else{
		    		$msg = '抱歉，内部发生错误';
		    		session(['msg'=>$msg]);
		    		return back();
		    		// return '失败';
		    	}
    			// return '可以修改';	    			
    		}
    	}
    	
    }

}
