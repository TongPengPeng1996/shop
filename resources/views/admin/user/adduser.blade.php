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
<title>添加用户</title>
<link id="layui_layer_skinlayercss" rel="stylesheet" href="{{ asset('/admins/lib/layer/1.9.3/skin/layer.css') }}" style="">
</head>
<body>
<div class="layui-layer-title" style="cursor: move;" move="ok"><a href="{{ URL('/admin/user/user-list') }}">会员管理</a>->添加会员</div>
<div class="pd-20">
<form id="form-member-add" class="form form-horizontal" method="post" action="">
<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
用户名：
</label>
<div class="formControls col-5">
<input id="member-name" class="input-text" type="text" nullmsg="用户名不能为空" datatype="*2-16" name="member-name" placeholder="" value="">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
性别：
</label>
<div class="formControls col-5 skin-minimal">
<div class="radio-box">
<div>
<input id="sex-1" type="radio" nullmsg="请选择性别！" name="sex" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; ">
</div>
<label for="sex-1">男</label>
</div>
<div class="radio-box">
<div>
<input id="sex-2" type="radio" name="sex" style="position: absolute; top: -20%; left: -50%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="sex-2">女</label>
</div>
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
状态：
</label>
<div class="formControls col-5 skin-minimal">
<div class="radio-box">
<div>
<input id="state-1" type="radio" nullmsg="请选择性别！" datatype="*" name="state" style="position: absolute; top: -20%; left: -57%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-1">普通用户</label>
</div>
<div class="radio-box">
<div>
<input id="state-2" type="radio" name="state" style="position: absolute; top: -20%; left: -57%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px;">
</div>
<label for="state-2">管理员</label>
</div>
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
邮箱：
</label>
<div class="formControls col-5">
<input id="email" class="input-text" type="text" nullmsg="请输入邮箱！" datatype="e" name="email" placeholder="@">
</div>
<div class="col-4">
<span class="Validform_checktip"></span>
</div>
</div>

<div class="row cl">
<label class="form-label col-3">
<span class="c-red">*</span>
手机：
</label>
<div class="formControls col-5">
<input id="member-tel" class="input-text" type="text" nullmsg="手机不能为空" datatype="m" name="member-tel" placeholder="" value="">
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
<a class="Hui-iconfont toTop" style="display:none" alt="返回顶部" title="返回顶部" href="javascript:void(0)">󰀣</a>
<script src="{{ asset('/admins/js/H-ui.admin.js') }}" type="text/javascript"></script>
</body>
</html>
@endsection
