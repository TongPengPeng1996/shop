<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image; //使用第三方扩展实现图片压缩

class GoodsController extends Controller
{
    //显示主页
    public function index(Request $request)
    {
    	// $list = \DB::table('shop_goods')->get();
        
        // $db = \DB::table('shop_goods');
        // $list = \DB::select("select *,shop_categorys.id,shop_goods.id as gid from shop_categorys,shop_goods where shop_goods.cateid = shop_categorys.id and shop_goods.state != 3");
        // $list = $db->paginate(1);
        // dd($list);

        $list= \DB::table('shop_categorys')
                    ->join('shop_goods','shop_goods.cateid','=','shop_categorys.id')
                    ->select('shop_categorys.*','shop_goods.*')
                    ->where('shop_goods.state','!=','3')
                    ->orderBy('shop_goods.id')
                    ->Paginate(2);

        // $where = [];    //将搜索条件 保存至数组   
        // if($request->has('name')){
        //     $name=$request->input('name');
        //     // dd($name);
        //     $list->where('shop_goods.proname','like',"%{$name}%");
        //     $where['name']=$name;
        //     // dd($where); 
        // }

        // dd($list);
        $num = count($list);
        
        // dd($num);
    	return view('/admin/goods/commodity-list',['list'=>$list,'num'=>$num]);
    }
   // 删除方法
    public function destroy($id)
    {
        $m = \DB::table('shop_goods')->where('id',$id)->delete();
        // dd($m);
        if($m > 0){
            return redirect('/admin/goods/commodity-list');
            // return '删除成功';
        }else{
            return redirect('/admin/goods/commodity-list');
        }
        // return 'asd';
    }
    // 修改显示页面
    public function edit($id)
    {
        $list = \DB::table('shop_goods')->where('id',$id)->first();
        $time = time();
        // dd($list->id);
        return view('./admin/goods/product-update',['list'=>$list,'time'=>$time]);
        // return '修改页面';
    }
    public function update(Request $request,$id)
    {

        $data = $request->only('proname','state','price','store','descript','image','addtime');
        // dd($data);
        // 图片上传
        $file = $request->file('image');
        // dd($file);
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();   //获得前缀
            // dd($ext);
            $filename = time().rand(1000,9999).'.'.$ext;    //新文件名
            $file->move('./uploads/',$filename);     //移动到uploads下
        }

        // 使用第三方插件执行图片缩放
        $img = Image::make('./uploads/'.$filename)->resize(100,100);  //打开资源，定义图片大小
        $img->save("./uploads/s_".$filename);  //另存为图片
        $image = $filename;
        $data['image'] = $image;

        // dd($data['image']);
        // dd($data);
        $list = \DB::table('shop_goods')->where('id',$id)->first();
        // dd($list);
        // dd($data['state']);
        
        // dd($data);
        if($data['proname'] == $list->proname){
            session(['msg'=>'名字不能重复']);

            return back();
        }else{
            if($data['proname'] == ''){
                session(['msg'=>'名字不能为空']);
                // dd($data['state']);
                return back();
            }else{
                // dd($data['state']);
                 $m = \DB::table('shop_goods')->where('id',$id)->update($data);
                // return '执行修改';

                 // dd($m);
                if($m > 0){
                    // dd($data['state']);
                    session()->forget('msg');
                    return redirect('/admin/goods/commodity-list');
                    // return '修改成功';
                }else{
                    dd($data['state']);
                    return back();
                    // return '失败';
                }
                // return '可以修改';
            }
           
        }
        
    }
    
}
