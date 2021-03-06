<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="{{ asset('/admins/favicon.ico') }}" >
<LINK rel="Shortcut Icon" href="{{ asset('/admins/favicon.ico') }}" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="{{ asset('admins/css/H-ui.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admins/css/H-ui.admin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admins/css/style.css') }}" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我们的后台</title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

<header class="Hui-header cl"> <a class="Hui-logo l" title="我们的后台" href="{{ URL('/admin')}}">我们的后台</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">H-ui</a> <span class="Hui-subtitle l">V2.3</span>


	<ul class="Hui-userbar">
		<!--<li>admin</li>-->
		<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">admin
	
			<i class="Hui-iconfont">&#xe6d5;</i></a>
			<ul class="dropDown-menu radius box-shadow">
				<!--<li><a href="#">个人信息</a></li>-->
				<!--<li><a href="#">切换账户</a></li>-->
				<li><a href="{{ URL('/admin/login') }}">退出</a></li>
			</ul>
		</li>
		
	</ul>
	<a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 镇店之宝<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="" href="{{ URL('/admin/introduce') }}">非卖品</a></li>
				</ul>
			</dd>
		</dl>


		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 活动<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="" href="{{ URL('/admin/recommend') }}">商品推荐</a></li>
					<li><a _href="" href="{{ URL('/admin/timerob') }}">限时抢购</a></li>

					<!-- <li><a _href="member-del.html" href="javas商品推荐cript:;">删除的会员</a></li>
					<li><a _href="member-level.html" href="javascript:;">等级管理</a></li>
					<li><a _href="member-scoreoperation.html" href="javascript:;">积分管理</a></li>
					<li><a _href="member-record-browse.html" href="javascript:void(0)">浏览记录</a></li>
					<li><a _href="member-record-download.html" href="javascript:void(0)">下载记录</a></li>
					<li><a _href="" href="{{ URL('/admin/user/adduser') }}">添加用户</a></li> -->
				</ul>
			</dd>
		</dl>
		<!-- <dl id="menu-article">
			<dt>
				<i class="Hui-iconfont">&#xe616;</i> 资讯管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li>
						<a _href="article-list.html" href="javascript:void(0)">资讯管理</a>
					</li>
				</ul>
			</dd>
		</dl> -->
		<!-- <dl id="menu-picture">
			<dt>
				<i class="Hui-iconfont">&#xe613;</i> 图片管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li>
						<a _href="picture-list.html" href="javascript:void(0)">图片管理</a>
					</li>
				</ul>
			</dd>
		</dl> -->
		<dl id="menu-product">
			<dt>
				<i class="Hui-iconfont">&#xe620;</i> 商品中心
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					
					<li><a _href="" href="{{ URL('/admin/goods/commodity-list') }}">商品管理</a></li>
					<li><a _href="" href="{{ URL('/admin/goods/goods-detail') }}">商品详情</a></li>
					<li><a _href="" href="{{ URL('/admin/goods/recycle') }}">下架商品</a></li>
				</ul>
			</dd>
		</dl>


		<dl id="menu-product">
			<dt>
				<i class="Hui-iconfont">&#xe620;</i> 分类中心
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a _href="" href="{{ URL('/admin/categorys') }}/create">添加顶级分类</a></li>
					<li><a _href="" href="{{ URL('/admin/goods/product-categorys') }}">分类管理</a></li>
					
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt>
				<i class="Hui-iconfont">&#xe620;</i> 品牌中心
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a _href="#" href="{{ URL('/admin/brand') }}">品牌管理</a></li>
					
				</ul>
			</dd>
		</dl>
		<!-- <dl id="menu-page">
			<dt><i class="Hui-iconfont">&#xe626;</i> 页面管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="page-home.html" href="javascript:void(0)">首页管理</a></li>
					<li><a _href="page-flinks.html" href="javascript:void(0)">友情链接</a></li>
				</ul>
			</dd>
		</dl> -->
		<!-- <dl id="menu-comments">
			<dt>
				<i class="Hui-iconfont">&#xe622;</i> 评论管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a _href="http://h-ui.duoshuo.com/admin/" href="javascript:;">评论列表</a></li>
					<li><a _href="feedback-list.html" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl> -->
		<!-- 张鹏宇 -->
		<!-- <dl id="menu-order">
			<dt><i class="Hui-iconfont">&#xe63a;</i> 订单中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="order-list.html" href="javascript:void(0)">订单列表</a></li>
					<li><a href="{{ URL('/admin/order/orders-list') }}">订单管理</a></li>
					<li><a _href="invoice-list.html" href="javascript:void(0)">发票管理</a></li>
				</ul>
			</dd>
		</dl> -->
		
		<dl id="menu-order">
			<dt><i class="Hui-iconfont">&#xe63a;</i> 地址管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!-- <li><a _href="order-list.html" href="javascript:void(0)">订单列表</a></li> -->
					<li><a href="{{ URL('/admin/address/address') }}" >地址详情</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-admin">
			<dt>
				<i class="Hui-iconfont">&#xe62d;</i> 系统管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a href="{{ URL('/admin/shop-help/shop-help') }}">商城帮助</a></li>
					
				</ul>
			</dd>
		</dl>
		<!-- 张鹏宇 -->
		<!-- <dl id="menu-admin">
			<dt>
				<i class="Hui-iconfont">&#xe62d;</i> 管理员管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a _href="admin-role.html" href="javascript:void(0)">角色管理</a></li>
					<li><a _href="admin-permission.html" href="javascript:void(0)">权限管理</a></li>
					<li><a _href="admin-list.html" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl> -->
		<!-- <dl id="menu-tongji">
			<dt>
				<i class="Hui-iconfont">&#xe61a;</i> 系统统计

				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="charts-1.html" href="javascript:void(0)">折线图</a></li>
					<li><a _href="charts-2.html" href="javascript:void(0)">时间轴折线图</a></li>
					<li><a _href="charts-3.html" href="javascript:void(0)">区域图</a></li>
					<li><a _href="charts-4.html" href="javascript:void(0)">柱状图</a></li>
					<li><a _href="charts-5.html" href="javascript:void(0)">饼状图</a></li>
					<li><a _href="charts-6.html" href="javascript:void(0)">3D柱状图</a></li>
					<li><a _href="charts-7.html" href="javascript:void(0)">3D饼状图</a></li>
				</ul>
			</dd>
		</dl> -->
		<!-- <dl id="menu-system">
			<dt>
				<i class="Hui-iconfont">&#xe62e;</i> 系统管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>
					<li><a _href="system-base.html" href="javascript:void(0)">系统设置</a></li>
					<li><a _href="system-category.html" href="javascript:void(0)">栏目管理</a></li>
					<li><a _href="system-data.html" href="javascript:void(0)">数据字典</a></li>
					<li><a _href="system-shielding.html" href="javascript:void(0)">屏蔽词</a></li>
					<li><a _href="system-log.html" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl> -->
	</div>
</aside>

<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="{{URL('/admin/index/welcome')}}">我的后台</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	 @yield('content')
</section>
<script type="text/javascript" src="{{ asset('/admins/lib/jquery/1.9.1/jquery.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('admins/lib/layer/1.9.3/layer.js') }}"></script> 
<script type="text/javascript" src="{{ asset('admins/js/H-ui.js') }}"></script> 
<script type="text/javascript" src="{{ asset('admins/js/H-ui.admin.js') }}"></script> 
</body>
</html>