<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// 前台  /*****************************************/
// 主页
// Route::get('/',function() {
// 	return view('./home/index');
// });
//主页
Route::get('/','Home\IndexController@index');

// 登录页
Route::get('/home/login','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@dologin');
Route::get('/home/check/{tmp}','Home\LoginController@check');
Route::get('/home/logout','Home\LoginController@logout');
// 注册页
Route::post('/home/check','Home\RegisterController@find');
Route::post('/home/register','Home\RegisterController@store');
Route::get('/home/register','Home\RegisterController@index');

 // 商品列表
 // Route::get('/home/products',function (){
 // 	return view('./home/products');
 // });
 /**
 *	@auth 仝朋朋
 *	@content  商品的前台遍历，品牌管理
 */
 /**************************************开始********/
 // 详情
Route::resource('/home/single','Home\SingleController');



// 添加到购物车   
Route::resource('/home/checkout','Home\CheckoutController');

// 商品列表页
Route::resource('/home/products','Home\ProductesController');


 /***************************************结束*********/




 //新闻资讯
 Route::get('/home/blog','Home\BlogController@index');

 // 博客-》查看评论
 Route::get('/home/blog_single',function (){
 	return view('./home/blog_single');
 });

// 联系页
Route::get('/home/contact',function (){
 	return view('./home/contact');
 });

// 详情页
// Route::get('/home/single',function (){
//  	return view('./home/single');
//  });

// 购物车
// Route::get('/home/checkout',function (){
//  	return view('./home/checkout');
//  });

// 用户中心
Route::get('/home/user_center',function (){
 	return view('./home/user_center');
 });

// 用户中心-》修改密码
Route::get('/home/passwd',function (){
 	return view('./home/passwd');
});

// 用户中心-》收藏页
Route::get('/home/collect',function (){
 	return view('./home/collect');
});

// 用户中心-》我的订单
Route::get('/home/indent',function (){
 	return view('./home/indent');
});

/********************张鹏宇***********************/

//城市级联显示处理
Route::get('/home/addre/{upid?}','Home\DistrictController@find');

//添加地址
Route::resource('/home/address','Home\DistrictWriteController');

//订单详情页
Route::resource('/home/ok-order','Home\OkorderController');

// 用户中心-》收货地址
Route::resource('/home/adjust','Home\AdjustController');
/********************张鹏宇结束*********************/

// 用户中心-》收货地址
// Route::get('/home/adjust',function (){
//  	return view('./home/adjust');
// });

/***********************************************/
// 验证码
Route::get('/Code','CodeController@index');

// 后台   /*****************************************/

// welcome
// Route::get('/admin/welcome',function(){
// 	return view('./admin/index/welcome');
// });

// 后台首页
Route::get('/admin',function(){
	return view('./admin/index/welcome');
});


/***************继承******************/
Route::get('/admin/base',function(){
	return view('./admin/base/base');
});
/*************************/

// 会员列表
Route::get('/admin/user/user-list',function(){
	return view('./admin/user/user-list');
});

// 会员列表添加
Route::get('/admin/user/adduser',function(){
	return view('./admin/user/adduser');
});

// 订单管理
Route::get('/admin/order/orders-list',function(){
	return view('./admin/order/orders-list');
});

// 订单修改
Route::get('/admin/order/editorder',function(){
	return view('./admin/order/editorder');
});

// 商品管理
// Route::get('/admin/goods/commodity-list',function(){
// 	return view('./admin/goods/commodity-list');
// });

// 分类管理
// ROute::get('/admin/goods/product-category',function(){
// 	return view('./admin/goods/product-category');
// 	// return 'dsas';
// });

// 添加商品
// Route::get('/admin/goods/product-add',function(){
// 	return view('./admin/goods/product-add');
// });

// 添加分类
// Route::get('/admin/goods/type',function(){
// 	return view('./admin/goods/type');
// });

// 添加详情
// Route::get('/admin/goods/goods-info',function(){
// 	return view('./admin/goods/goods-info');
// });

// 品牌中心
// Route::get('/admin/brand',function(){
// 	return view('./admin/brand/brand-list');
// });


// 登录
Route::get('/admin/login',function(){
	return view('./admin/index/login');
});





/************************仝朋朋**************************/
// 商品的增删改查
Route::resource('/admin/goods/commodity-list','Goods\GoodsController');

// 商品添加详情
Route::resource('/admin/goods/goods-info','Admin\Goods\GoodsDetailController');

// 查看详情
// Route::get('/admin/goods/goods-detail/{gid}','Admin\Goods\CheckDetailController@index');
Route::resource('/admin/goods/goods-detail','Admin\Goods\CheckDetailController');

// 分类的增删改查
Route::resource('/admin/goods/product-categorys','Goods\CategorysController');

// 商品的添加分类
Route::resource('/admin/goods/type','Goods\TypeController');

// 商品添加顶级分类
Route::resource('/admin/categorys','Admin\Goods\CategoryController');

// 添加商品
Route::resource('/admin/goods/product-add','Goods\AddgoodsController');

// 下架商品
Route::resource('/admin/goods/recycle','Admin\Goods\RecycleController');

// 品牌管理
Route::resource('/admin/brand','Admin\Brand\BrandController');

// 镇店商品 非卖
Route::resource('/admin/introduce','Admin\Introduces\IntroduceController');

// 商品推荐
Route::resource('/admin/recommend','Admin\Activity\RecommendController');

// 限时抢购
Route::resource('/admin/timerob','Admin\Activity\TimerobController');

/************************仝朋朋结束***************************/




/****************************张鹏宇**********************************/
//商城帮助增删改查
Route::resource('/admin/shop-help/shop-help','Admin\shophelp\ShopHelpController');

//多地址增删该查
Route::resource('/admin/address/address','Admin\address\AddressController');



/*******************************张鹏宇结束*******************************/


