@extends('admin/base/base')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="{{ asset('/admins/css/css.css') }}" type="text/css" rel="stylesheet" />
<link href="{{ asset('/admins/css/main.css') }}" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
/*#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}*/
/*#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}*/
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
/*#main-tab th{ font-size:12px; background:url({{ asset('/admins/images/gq/list_bg.jpg') }})  repeat-x; height:32px; line-height:32px;}*/
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
#addinfo{ padding:0 0 10px 0;}
input.text-word{ width:50px; height:24px; line-height:20px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; text-align:center; color:#666}
.tda{width:100px;}
.tdb{ padding-left:20px;}
td#xiugai{ padding:10px 0 0 0;}
td#xiugai input{ width:100px; height:40px; line-height:30px; border:none; border:1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
</style>
</head>
<body>
<!--main_top-->
<!-- 删除方法 -->
 <form action='' method='post' name='myfrom'>
        <input type='hidden' name='_token' value="{{ csrf_token() }}">
        <input type='hidden' name='_method' value="delete">
</form>

<form method="post" action="">
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top" id="addinfo">
    	<nav class="breadcrumb"> 
    		<a href=" {{ URL('/admin') }}">
    			<i class="Hui-iconfont">&#xe67f;</i>首页
    		</a> 
		    <span class="c-gray en">&gt;</span>
		    <a href="{{ URL('/admin/goods/commodity-list') }}"> 商品列表</a>
		    <span class="c-gray en">&gt;</span>
		     <a href="{{ URL('/admin/goods/product-categorys') }}">分类管理</a>
	    </nav>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright tda">顺序</th>
        <th align="center" valign="middle" class="borderright tda">分类树</th>
        <th align="center" valign="middle" class="borderright tda"> Path</th>
        <th align="center" valign="middle" class="borderright">分类名</th>
        <th align="center" valign="middle">分类管理</th>
      </tr>
      <?php $num = 1; ?>
		   @foreach($list as $value)

       
      <tr class="bggray">

        <td align="center" valign="middle" class="borderright borderbottom"><input type="text" name="" class="text-word" value="{{$num++}}"></td>
        
          @if($value->pid == 0)
          <td align="left" valign="middle" class="borderright borderbottom tdb">
            <img src="{{ URL('/admins/images/gq/dirfirst.gif') }}" width="15" height="13" />
          </td>
          @else
            <td align="left" valign="middle" class="borderright borderbottom tdb">
              <img src="{{ URL('/admins/images/gq/dirsecond.gif') }}" width="29" height="29">
            </td>
          @endif
		
        
        <td align="left" valign="middle" class="borderright borderbottom tdb">
         
            
            {{ $value->path }}
          
        </td>
        <td align="center" valign="middle" class="borderright borderbottom">{{ $value->catename }}</td>
        <td align="center" valign="middle" class="borderbottom">
          <a href="{{ URL('/admin/goods/product-categorys') }}/{{ $value->id }}/edit" target="mainFrame" onFocus="this.blur()" class="add">修改</a>
          <span class="gray">&nbsp;|&nbsp;</span>
        	<span class="gray">&nbsp;|&nbsp;</span>
		    <!-- categorys表的id  和  goods的cateid  查询   如果 有 那么不能有删除 -->
       
        <a href="javascript:doDel({{ $value->id }})" class="add">删除</a>
      

      <!-- <button onclick="doDelete({{ $value->id }})">删除</button> -->
			<span class="gray">&nbsp;|&nbsp;</span>
        	<span class="gray">&nbsp;|&nbsp;</span>
			<a href="{{ URL('/admin/goods/type') }}" target="mainFrame" onFocus="this.blur()" class="add">添加子版块</a>
		</td>
      </tr>
      
	 @endforeach
	  <!-- <tr>
        <td align="center" valign="middle" class="borderright borderbottom"><input type="text" name="" class="text-word" value="2"></td>
        <td align="left" valign="middle" class="borderright borderbottom tdb"><img src="{{ URL('/admins/images/gq/dirsecond.gif') }}" width="29" height="29"></td>
        <td align="center" valign="middle" class="borderright borderbottom"><img src="{{ URL('/admins/images/gq/cn.gif') }}" style="width:57px;
		height:57px;"/></td>
        <td align="left" valign="middle" class="borderright borderbottom tdb"> asd </td>
        <td align="center" valign="middle" class="borderbottom">
			<a href="#" target="mainFrame" onFocus="this.blur()" class="add">查看商品列表</a><span class="gray">&nbsp;|&nbsp;</span>
			<a href="#" target="mainFrame" onFocus="this.blur()" class="add">修改</a><span class="gray">&nbsp;|&nbsp;</span>
			
			
			<a href="#" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
			<a href="#" target="mainFrame" onFocus="this.blur()" class="add">添加子版块</a>
		</td>
      </tr> -->
	 
  <tr  style='background-color:orange;'>
    <td align="left" valign="top" id="xiugai" colspan='5'>　</td>
  </tr>
</table>
</form>
</body>
<script type="text/javascript">
  // var did = document.getElementById('delete');

  function doDel(id)
  {
    //alert(id);
    // return false;
    var form = document.myfrom;
    // console.log(form);
    form.action = '{{ URL("/admin/goods/product-categorys") }}/'+id;
    form.submit();
  }
</script>
</html>
@endsection