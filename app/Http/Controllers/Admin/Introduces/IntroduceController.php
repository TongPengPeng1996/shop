<?php

namespace App\Http\Controllers\Admin\Introduces;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image; //使用第三方扩展实现图片压缩

class IntroduceController extends Controller
{
    //显示
	public function index(Request $request)
	{
		// $list = \DB::table();
		/*搜索*/
		$db = \DB::table('shop_introduce');
		$where = [];    //将搜索条件 保存至数组	
    	if($request->has('name')){
            $name=$request->input('name');
            // dd($name);
           $db->where('goodsname','like',"%{$name}%");
            $where['name']=$name;
            // dd($where); 
        }
        
		$list = $db->orderBy('id')->paginate(2);
		// dd($list);
		$num = count($list);
		// dd($num);
		return view('./admin/introduce/introduce-list',['list'=>$list,'num'=>$num,'where'=>$where]);
		// return '显示';
	}
	// 添加
	public function create()
	{
		return view('./admin/introduce/introduce-add');
		// return '添加';
	}
	// 执行添加
	public function store(Request $request)
	{
		$data = $request->only('GoodsName','GoodsImage','GoodsName','color','size','descript','GoodsPrice');
		// dd($data);
		$name = $data['GoodsName'];
		if(empty($name)){
			session(['name'=>'名字不能为空']);
			return back();
		}
    	// dd($data['goodsimage']);
		 // 图片上传
        $file = $request->file('GoodsImage');
        // dd($file);
        if(empty($data['GoodsImage'])){
        	session(['image'=>'图片不能为空']);
        	
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
        // 存入图片
       $data['GoodsImage'] = $filename;
       // dd($data);
       // 添加
       $m = \DB::table('shop_introduce')->insert($data);
       if($m > 0){
       		session()->forget('image');
       		session()->forget('name');
       		return redirect('/admin/introduce');
       }else{
       		return back();
       }

	}
	// 执行删除
	public function destroy($id)
	{
		// return $id;

		$m = \DB::table('shop_introduce')->where('id',$id)->delete();
		if($m > 0){
			return back();
		}else{
			return back();
		}
	}
	// 修改
	public function edit($id)
	{
		

		$list = \DB::table('shop_introduce')->where('id',$id)->first();
		// dd($list);
		return view('./admin/introduce/introduce-update',['list'=>$list]);
		// return $id;

	}
	// 执行修改
	public function update(Request $request,$id)
	{
		// $data = $request->all();
		$data = $request->only('GoodsName','GoodsImage','GoodsName','color','size','descript','GoodsPrice');
		// dd($data);
		$list = \DB::table('shop_introduce')->where('id',$id)->first();
		// dd($list->GoodsName);
		// 判断名字是否为空
		$name = $data['GoodsName'];
		// dd($name);
		if(empty($name)){
			session(['name'=>'名字不能为空']);
			return back();
		}
		// 判断名字是否存在
		if($name == $list->GoodsName){
			// return '在';
			session(['name'=>'名字已存在']);
			return back();
		}

    	// dd($data['goodsimage']);
		 // 图片上传
        $file = $request->file('GoodsImage');
        // dd($file);
        if(empty($data['GoodsImage'])){
        	session(['image'=>'图片不能为空']);
        
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
        // 存入图片
       $data['GoodsImage'] = $filename;
       // dd($data);

       $m = \DB::table('shop_introduce')->where('id',$id)->update($data);
       if($m > 0){
       		session()->forget('name');
       		session()->forget('image');

       		return redirect('/admin/introduce');
       }else{
       		return redirect('/admin/introduce');
       }

	}

}
