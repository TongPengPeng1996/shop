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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i><a href="{{ URL('/admin/index/index') }}"> 首页</a> 
<span class="c-gray en">&gt;</span><a href="{{ URL('/admin/goods/product-categorys') }}">分类管理</a>  
<span class="c-gray en">&gt;</span> <a href="{{ URL('/admin/goods/commodity-list') }}">商品列表</a> </nav>
<div class="pd-20">

	<div class="cl pd-5 bg-1 bk-gray mt-20">
	 <span class="l">
	 	<a class="btn btn-primary radius" onclick="article_add('添加资讯','article-add.html')" href="{{  URL('
		/admin/goods/product-add') }}">
		<i class="Hui-iconfont">&#xe600;</i> 添加商品</a> 
		<a class="btn btn-primary radius" onclick="article_add('添加资讯','article-add.html')" href="{{  URL('/admin/goods/type') }}"><i class="Hui-iconfont">&#xe600;</i> 添加分类</a> 
	</span> <span class="r">共有数据：<strong>{{ $num }}</strong> 条</span> </div>
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
				<th width="80">商品名</th>
				<th width="50">商品分类</th>
				<th width="80">商品价格</th>
				<th width="100">商品图片</th>
				<th width="30">商品库存</th>
				<th width="200">商品描述</th>
				<th width="50">商品状态</th>
				<th width="100">添加时间</th>
				<th width="190">操作</th>

			</tr>
		</thead>

		<tbody>
			@foreach($list as $value)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{ $value->gid }}</td>
				<td>{{ $value->proname }}</td>
				<td>{{ $value->catename }}</td>
				<td>￥{{ $value->price }}</td>
				<td><img src="{{ asset('./uploads/s_') }}{{ $value->image }}" style="width:50px; height:50px;"></td>
				<td>{{ $value->store }}件</td>
				<td>{{ $value->descript }}</td>
				<td>
					@if($value->state == 1)
						新添加
					@elseif($value->state == 2)
						在售
					@elseif($value->state == 3)
						已下架
					@endif
				</td>
				<td>
					<?php 
						date_default_timezone_set('PRC');
						$data = $value->addtime;
						echo date("Y-m-d H:i",$data);
					 ?>
					<!-- {{ $value->addtime }}	 -->
				</td>
				<td class="td-manage">
				<a href="{{ URL('/admin/goods/commodity-list') }}/{{ $value->gid }}/edit"><button>修改</button></a>
				<a href="javascript:doDel({{ $value->gid }})"><button>删除</button></a>
				<a href="{{ URL ('/admin/goods/goods-info') }}/{{ $value->gid }}/edit"><button>添加详情</button></a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	</div>
</div> 
</body>
<script type="text/javascript">
	function doDel(id)
	{
		var form = document.myform;
		var a = form.action = "{{ URL('/admin/goods/commodity-list') }}/"+id;
		form.submit();
		// alert(a);
	}
</script>
</html>
@endsection
