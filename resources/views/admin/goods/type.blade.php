@extends('admin/base/base')
@section('content')
<html>
<head>
<meta charset="utf-8">
<meta content="webkit|ie-comp|ie-stand" name="renderer">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" name="viewport">
<meta content="no-siteapp" http-equiv="Cache-Control">
<link type="text/css" rel="stylesheet" href="{{ asset('/admins/css/H-ui.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('/admins/css/H-ui.admin.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('/admins/lib/icheck/icheck.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('/admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}">
<title>添加分类</title>
<link id="layui_layer_skinlayercss" rel="stylesheet" href="{{ asset('/admins/lib/layer/1.9.3/skin/layer.css') }}" style="">
</head>
<body>
<div class="layui-layer-title" style="cursor: move;" move="ok"><a href="{{ URL('/admin/goods/commodity-list') }}">商品管理</a>->添加分类</div>
<div class="pd-20">
<form id="form-member-add" class="form form-horizontal" method="post" action="{{ URl('/admin/goods/type') }}">
<input type='hidden' name='_token' value='{{ csrf_token() }}'>

<!-- /*********/ -->
<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>商品分类：</label>
			<div class="formControls col-5"> <span class="select-box">
				<select name="cateid" class="select">
                    @foreach($type as $value)
                        
                            <option value="{{ $value->id }}">{{ $value->catename }}</option>
                    
                    @endforeach
				</select>
				</span> 
            </div>
		</div>
<!-- /*****************/ -->
<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
分类名：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" nullmsg="分类名不能为空" datatype="*2-16" name="catename" placeholder="请输入分类名" value="">
</div>
<div class="col-4">
<span class="Validform_checktip" style='color:red;'>
	@if(session('type'))  
		{{ session('type') }}  
	@endif
</span>
</div>
</div>

<div class="row cl">
<div class="col-9 col-offset-3">
<input class="btn btn-primary radius" type="submit" value="  提交  ">
</div>
</div>
</form>
</div>
<script src="{{ asset('/admins/lib/jquery/1.9.1/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admins/lib/icheck/jquery.icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admins/lib/Validform/5.3.2/Validform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admins/lib/layer/1.9.3/layer.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admins/js/H-ui.js') }}" type="text/javascript"></script>
<a class="Hui-iconfont toTop" style="display:none" alt="返回顶部" title="返回顶部" href="javascript:void(0)">󰀣</a>
<script src="{{ asset('/admins/js/H-ui.admin.js') }}" type="text/javascript"></script>
</body>
</html>
@endsection
