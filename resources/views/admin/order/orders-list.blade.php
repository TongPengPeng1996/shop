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
<nav class="breadcrumb"> <a href=" {{ URL('/admin') }}"><i class="Hui-iconfont">&#xe67f;</i>首页</a> 
<span class="c-gray en">&gt;</span> 订单中心 
<span class="c-gray en">&gt;</span> <a href="{{ URL('/admin/order/orders-list') }}">订单管理</a> </nav>
<div class="pd-20">
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="30">订单ID</th>
				<th width="30">用户ID</th>
				<th width="100">收货人姓名</th>
				<th width="100">联系方式</th>
				<th width="200">收货地址</th>
				<th width="50">订单金额</th>
				<th width="30">订单状态</th>
				<th width="100">订单时间</th>
				<th width="150">操作</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>1</td>
				<td>1</td>
				<td>张三</td>
				<td>1234567890</td>
				<td>北京市昌平区回龙观兄弟连</td>
				<td>10000</td>
				<td>已发货</td>
				<td>2016-10-9</td>
				<td class="td-manage">
				<a href="#"><button>订单详情</button></a>
				<a href="{{ URL('/admin/order/editorder') }}"><button>修改订单</button></a>
				<a href=""><button>删除订单</button></a>
				</td>
			</tr>
		</tbody>
	</table>
	</div>
</div> 
</body>
</html>
@endsection
