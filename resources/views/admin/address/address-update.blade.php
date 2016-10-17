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
<link href="css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>新增商品</title>
</head>
<body>
<div class="pd-20">
	<form action="/admin/address/address/{{ $shop->id }}" method="post" class="form form-horizontal" id="form-article-add">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="put">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>收货人姓名：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text"  placeholder="" id="" name="name" value="{{ $shop->name }}">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>收货人地址：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text"  placeholder="" id="" name="ReceiptAddress" value="{{ $shop->ReceiptAddress }}">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>收货人电话：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text"  placeholder="" id="" name="Telephone" value="{{ $shop->Telephone }}">
			</div>
		</div>

		<div class="row cl" >
			<label class="form-label col-2"><span class="c-red">*</span>收货时间：</label>
          		<select name="ReceivingTime"  style="height:30px;" class="formControls col-10" value="{{ $shop->ReceivingTime }}">
                        <option value="1">星期一</option>
                        <option value="2">星期二</option>
                        <option value="3">星期三</option>
                        <option value="4">星期四</option>
                        <option value="5">星期五</option>
                        <option value="6">星期六</option>
                        <option value="7">星期日</option>
                        <option value="8">星期六日</option>
                </select>
          </div>

		

		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 修改</button>
				<!-- <input type="submit" value="修改" class="btn btn-primary radius"> -->
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>
</div>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script> 
<script type="text/javascript">




</script>

</body>
</html>
@endsection