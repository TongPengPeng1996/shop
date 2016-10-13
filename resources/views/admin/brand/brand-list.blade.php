@extends('admin/base/base')
@section('content')
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="{{ asset('/admins/css/H-ui.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/css/H-ui.admin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}" rel="stylesheet" type="text/css" />
<title>商品管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i><a href="{{ URL('/admin') }}"> 首页</a> 
<span class="c-gray en">&gt;</span><a href="{{ URL('/admin/brand/brand-list') }}">品牌管理</a>  
 </nav>
<div class="pd-20">

	<div class="cl pd-5 bg-1 bk-gray mt-20">
	 <span class="l">
	 	<a class="btn btn-primary radius" onclick="article_add('添加资讯','article-add.html')" href="{{  URL('
		/admin/goods/product-add') }}">
		<i class="Hui-iconfont">&#xe600;</i> 添加品牌</a> 
		
	</span> <span class="r">共有数据：<strong>10</strong> 条</span> </div>
	<div class="mt-20">
		<form action='' method='post' name='myform'>
			<input type='hidden' name='_token' value="{{ csrf_token() }}">
			<input type='hidden' name='_method' value="delete">
		</form>
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="30">商品ID</th>
				<th width="80">品牌名称</th>
				<th width="100">品牌图片</th>
				<th width="190">操作</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>id</td>
				<td>阿迪达斯</td>
				<td><img src="{{ URL('/admins/images/user.png') }}" style="width:50px; height:50px;"></td>
				<td class="td-manage">
				<a href="#"><button>修改</button></a>
				<a href="#"><button>删除</button></a>
				</td>
			</tr>
		</tbody>
	</table>
	</div>
</div> 
</body>
<script type="text/javascript">
	
</script>
</html>
@endsection
