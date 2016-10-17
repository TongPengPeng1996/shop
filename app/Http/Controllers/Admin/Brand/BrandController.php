<?php

namespace App\Http\Controllers\Admin\Brand;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image; //使用第三方扩展实现图片压缩

class BrandController extends Controller
{
    //显示
    public function index(Request $request)
    {
    	$db = \DB::table('shop_brands');
    	/*搜索*/
    	$where = [];    //将搜索条件 保存至数组	
    	if($request->has('name')){
            $name=$request->input('name');
            // dd($name);
            $db->where('name','like',"%{$name}%");
            $where['name']=$name;
            // dd($where); 
        }
        /*搜索*/
    	
    	// dd($list);
    	
    	$list = $db->orderBy('id')->paginate(1);
    	$num = count($list);
    	// dd($num);
    	return view('./admin/brand/brand-list',['list'=>$list,'num'=>$num,'where'=>$where]);
    }
    // 添加
    public function create()
    {
    	return view('./admin/brand/brand-add');
    	return '添加';
    }
    // 执行添加
    public function store(Request $request)
    {
    	// 填写的数据
    	$data = $request->only('name','url','image');
    	// dd($data['name']);
    	$name = $data['name'];
    	// dd($data['image']);
		 // 图片上传
        $file = $request->file('image');
        // dd($file);
        if(empty($data['image'])){
        	session(['image'=>'图片不能为空']);
        	
        	return redirect('/admin/brand/create');
        }
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();   //获得前缀
            // dd($ext);
            $filename = time().rand(1000,9999).'.'.$ext;    //新文件名
            $file->move('./uploads/',$filename);     //移动到uploads下
        }
        // 使用第三方插件执行图片缩放
        $img = Image::make('./uploads/'.$filename)->resize(100,100);  //打开资源，定义图片大小
        $img->save("./uploads/s_".$filename);  //另存为图片
        // 存入图片
       $data['image'] = $filename;
       // dd($filename);

    	// 查看填写的官网名字是否一样
    	$brand = \DB::select("select * from shop_brands");
    	// dd($name);
    	// dd($brand);
    	$arr = array();
    	foreach($brand as $value){
    		$arr[] = $value->name;
    	}
    	if($data['url'] == ''){
    		session(['url'=>'url不能为空']);
    		return back();
    	}
    	if(in_array($name,$arr)){
    		session(['msg'=>'品牌名称已存在']);
    		return back();
    		// return '存在';

    	}else{
    		$m = \DB::table('shop_brands')->insert($data);
    		if($m > 0){
    			session()->forget('msg');
    			session()->forget('image');
    			return redirect('/admin/brand');
    			// return '添加成功';
    		}else{
    			// return '添加失败';
    			return back();
    		}
    		// return '可以添加';
    	}
    	// return '执行添加';
    }
    // 删除
    public function destroy($id)
    {	
    	$m = \DB::table('shop_brands')->where('id',$id)->delete();
    	if($m > 0){
    		return redirect('/admin/brand');
    	}else{
    		return back();
    	}
    	// return '删';
    }
    // 修改显示页面
    public function edit($id)
    {
    	$list = \DB::table('shop_brands')->where('id',$id)->first();
    	// dd($list);
    	return view('./admin/brand/brand-update',['list'=>$list]);
    	// return $id;
    }
    // 执行修改
    public function update(Request $request,$id)
    {
    	$data = $request->only('name','url','image');
    	// dd($data);
    	$name = $data['name'];
    	$url = $data['url'];
    	// dd($name);
    	// 图片上传
        $file = $request->file('image');
        // dd($file);
        if(empty($data['name'])){
        	session(['name'=>'名字不能为空']);
        	return back();
        }
        if(empty($data['image'])){
        	session(['image'=>'图片不能为空']);
        	return back();
        }
        if(empty($data['url'])){
        	session(['url'=>'地址不能为空']);
        	return back();
        }
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();   //获得前缀
            // dd($ext);
            $filename = time().rand(1000,9999).'.'.$ext;    //新文件名
            $file->move('./uploads/',$filename);     //移动到uploads下
        }

        // 使用第三方插件执行图片缩放
        $img = Image::make('./uploads/'.$filename)->resize(100,100);  //打开资源，定义图片大小
        $img->save("./uploads/s_".$filename);  //另存为图片
        $data['image'] = $filename;
        // dd($data);
        $list = \DB::table('shop_brands')->get();
        // dd($list);
        $brand = array();
        $urls = array();
        foreach($list as $value){
        	$brand[] = $value->name;
        	$urls[] = $value->url;
        }

        // dd($urls);

        // dd($brand);
        if(in_array($name,$brand)){
        	session(['name'=>'名字数据库有了']);
        	return back();
        }else{
        	if(in_array($url,$urls)){
        		session(['url'=>'url已存在']);
        		return back();
        	}else{
        		$m = \DB::table('shop_brands')->where('id',$id)->update($data);
        		if($m > 0){
        			session()->forget('msg');
        			session()->forget('name');
        			session()->forget('image');
        			return redirect('/admin/brand');
        			// return '成功';
        		}else{
        			return back();
        		}
        		// return '可以修改';
        	}
        	
        }

    }

}
