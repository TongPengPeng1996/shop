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
<title>修改订单</title>
<link id="layui_layer_skinlayercss" rel="stylesheet" href="{{ asset('/admins/lib/layer/1.9.3/skin/layer.css') }}" style="">
</head>
<body>
<!-- <div class="layui-layer-title" style="cursor: move;" move="ok">编辑</div> -->
<div class="layui-layer-title" style="cursor: move;" move="ok"><a href="{{ URL('/admin/order/orders-list') }}">返回前一页</a></div>
<div class="pd-20">
<form id="form-member-add" class="form form-horizontal" method="post" action="">
<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
收货人姓名：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" datatype="*2-16" name="getman">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
联系方式：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" datatype="*2-16" name="phonenum">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
收货地址：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" datatype="*2-16" name="address">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
订单金额：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" datatype="*2-16" name="getman">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
订单状态：
</label>
<div class="formControls col-5 skin-minimal">
<div class="radio-box">
<div>
<input id="state-1" type="radio" datatype="*" name="state" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-1">未付款</label>
</div>
<div class="radio-box">
<div>
<input id="state-2" type="radio" datatype="*" name="state" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-2">已发货</label>
</div>
<div class="radio-box">
<div>
<input id="state-3" type="radio" datatype="*" name="state" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-3">已完成</label>
</div>
<div class="radio-box">
<div>
<input id="state-4" type="radio" datatype="*" name="state" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-4">已失效</label>
</div>
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
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
<a class="Hui-iconfont toTop" style="display:none" alt="返回顶部" title="返回顶部" href="javascript:void(0)">󰀣</a></script>
<script src="{{ asset('/admins/js/H-ui.admin.js') }}" type="text/javascript"></script>
</body>
</html>
@endsection
