@extends('admin/base/base')

@section('content')
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="{{ asset('/admins/css/H-ui.min.css') }}" rel="stylesheet" type="text/css" />
<!-- {{ asset('/admins/css/H-ui.min.css') }} -->
<link href="{{ asset('/admins/css/H-ui.admin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/css/style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i><a href="{{ URL('/admin') }}">首页</a>  <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 商城帮助 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="{{ URL('/admin/shop-help/shop-help') }}" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">

	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
		
		 <a class="btn btn-primary radius" onclick="picture_add('添加名称','picture-add.html')" href="{{ URL('/admin/shop-help/shop-help') }}/create">
		 	<i class="Hui-iconfont">&#xe600;</i> 
		 	添加名称</a>
		 </span> 
		  </div>
	<div class="mt-20">
		<form action="" method="post" name="myform">
			<input type="hidden" name="_token" value="{{ csrf_token()}}">
			<input type="hidden" name="_method" value="delete">
		</form>
	
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">标题</th>
					<th width="200">描述</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($list as $shop)
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td>{{ $shop->id }}</td>
					<td>{{ $shop->title }}</td>
					<td class="text-c">{{ $shop->descript }}</td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="{{ URL('/admin/shop-help/shop-help') }}/{{ $shop->id }}/edit" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'10001')" href="javascript:doDel({{ $shop->id }});" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script> 
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});


	//删除标题
	function doDel(id){
		if(confirm('确定删除吗?')){
				// alert(id);
				//1 获得form表单节点对象
				var myform = document.myform;
				//2 设置提交方式 
				myform.action = "/admin/shop-help/shop-help/"+id;//提交地址 
				myform.submit();//执行表单提交
			}
	}

	
</script>
</body>
</html>
@endsection