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
<link rel="stylesheet" type="text/css" href="{{ asset('/admins/css/bootstrap.min.css') }}">
<link href="{{ asset('/admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}" rel="stylesheet" type="text/css" />
<title>商品管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i><a href="{{ URL('/admin') }}"> 首页</a> 
<span class="r">本页共有数据：<strong style="color:red;">{{ $num }}</strong> 条</span>
<span class="c-gray en">&gt;</span> <a href="{{ URL('/admin/goods/commodity-list') }}">商品列表</a> </nav>
<div class="pd-20">

	
	<div class="mt-20">
		<center>
			<form action="{{ URL('/admin/goods/goods-detail') }}" class="form-inline" >
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
				搜索 <input type="text" name="name" size="30" class="form-control">
					<input type="submit" class="btn btn-primary">
			</form>
		</center>
		<br>
		<form action='' method='post' name='myform'>
			<input type='hidden' name='_token' value="{{ csrf_token() }}">
			<input type='hidden' name='_method' value="delete">
		</form>
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="30">商品详情ID</th>
				<th width="80">商品名</th>
				<th width="50">商品尺码</th>
				<th width="80">商品颜色</th>
				<th width="100">操作</th>
				<!-- <th width="30">商品库存</th>
				<th width="200">商品描述</th>
				<th width="50">商品状态</th>
				<th width="100">添加时间</th>
				<th width="190">操作</th> -->

			</tr>
		</thead>

		<tbody>
			@foreach($list as $value)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{ $value->id }}</td>
				<td>{{ $value->goodsname }}</td>
				<td>{{ $value->size }}</td>
				<td>{{ $value->color }}</td>
				<td>
					<a href="javascript:onclick=doDel({{ $value->id }})"><button style="color:red;">删除</button></a>
					<a href="{{ URL('/admin/goods/goods-detail') }}/{{ $value->id }}/edit"><button style="color:blue;">修改</button></a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	<center>{!! $list->appends($where)->render(); !!}</center>	
	</div>
</div> 
</body>
<script type="text/javascript">
	function doDel(id)
	{
		var e = confirm('确定删除?');
		if(e){
			// alert('删');
			var form = document.myform;
			// alert(id);
			form.action = "{{ URL('/admin/goods/goods-detail') }}/"+id;
			form.submit();
		}else{
			alert('别瞎点');	
		}
		
	}
</script>
</html>
@endsection
