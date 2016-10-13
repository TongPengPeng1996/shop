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
<link href="{{ asset('/admins/css/H-ui.admin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/lib/icheck/icheck.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/lib/Hui-iconfont/1.0.1/iconfont.css') }}" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改分类</title>
</head>
<body>
  <nav class="breadcrumb"> 
        <a href=" {{ URL('/admin/index/index') }}">
          <i class="Hui-iconfont">&#xe67f;</i>首页
        </a> 
        <span class="c-gray en">&gt;</span>
        <a href="{{ URL('/admin/goods/commodity-list') }}"> 商品列表</a>
        <span class="c-gray en">&gt;</span>
         <a href="{{ URL('/admin/goods/product-categorys') }}">分类管理</a>
      </nav>
<div class="pd-20">
  <form action="{{ URL('/admin/goods/product-categorys') }}/{{ $list->id }}" method="post" class="form form-horizontal" id="form-user-add">
    <input type='hidden' name = '_token' value='{{ csrf_token() }}'>
    <input type='hidden' name = '_method' value='put'>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>分类名称：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" name="catename" value="{{ $list->catename }}" style="color:red;" placeholder="" id="user-name">
        <span style="color:orange;">
            @if(session('catename'))
              {{ session('catename') }}
            @endif
        </span>
      </div>
      <div class="col-5"> </div>
    </div>
    
    <div class="row cl">
      <div class="col-9 col-offset-2">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript" src="{{ asset('/admins/lib/jquery/1.9.1/jquery.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('/admins/lib/icheck/jquery.icheck.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('/admins/lib/Validform/5.3.2/Validform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/lib/layer/1.9.3/layer.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/js/H-ui.js') }}"></script> 
<script type="text/javascript" src="{{ asset('/admins/js/H-ui.admin.js') }}"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-user-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script>
</body>
</html>
@endsection
