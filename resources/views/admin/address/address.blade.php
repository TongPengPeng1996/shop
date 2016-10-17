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
<title>订单管理</title>
</head>
<body>
<nav class="breadcrumb"> <a href=" {{ URL('/admin/index/index') }}"><i class="Hui-iconfont">&#xe67f;</i>首页</a> 
<span class="c-gray en">&gt;</span> 地址管理 
<span class="c-gray en">&gt;</span> <a href="{{ URL('/admin/order/orders-list') }}">地址详情</a> </nav>
<div class="pd-20">
	<div class="mt-20">
	<form action="" method="post" name="myform">
			<input type="hidden" name="_token" value="{{ csrf_token()}}">
			<input type="hidden" name="_method" value="delete">
	</form>
	<!-- <form adtion="" method="post"> -->
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="30">地址ID</th>
				<th width="30">用户ID</th>
				<th width="100">收货人姓名</th>
				<th width="100">收货人地址</th>
				<th width="200">收货人电话</th>
				<th width="50">收货时间</th>
				<th width="150">操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list as $v)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{ $v->id }}</td>
				<td>{{ $v->uid }}</td>
				<td>{{ $v->name }}</td>
				<td>{{ $v->ReceiptAddress }}</td>
				<td>{{ $v->Telephone }}</td>
				<td>{{ $v->ReceivingTime }}</td>
				<td class="td-manage">
				<a style="text-decoration:none" class="ml-5" href="{{ URL('/admin/address/address') }}/{{ $v->id }}/edit" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<!-- <a href="{{ URL('/admin/order/editorder') }}"><button>修改</button></a> -->
				<!-- <a href="javascript:doDel({{ $v->id }})"><button>删除</button></a> -->
				<a style="text-decoration:none" class="ml-5"  href="javascript:doDel({{ $v->id }})" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			@endforeach
		</tbody>
	</table>
	<!-- </form> -->
	</div>
</div> 
</body>
<script type="text/javascript">
	//删除标题
	function doDel(id){
		if(confirm('确定删除吗?')){
				// alert(id);
				//1 获得form表单节点对象
				var myform = document.myform;
				//2 设置提交方式 
				myform.action = "/admin/address/address/"+id;//提交地址 
				myform.submit();//执行表单提交
			}
		// alert(id);
	}
</script>
</html>
@endsection
