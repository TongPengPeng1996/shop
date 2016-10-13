@extends('admin/base/base')

@section('content')
<div class="mt-20">
	<caption>会员管理</caption>
	<table class="table table-border table-bordered  table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input name="" value="" type="checkbox"></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="90">性别</th>
				<th width="150">用户状态</th>
				<!-- <th width="130">注册时间</th> -->
				<th width="110">邮箱</th>
				<th width="110">手机号</th>
				<th width="120">操作</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td><input value="1" name="" type="checkbox"></td>
				<td>1</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u></td>
				<td>男</td>
				<td>普通用户</td>
				<!-- <td>2016-10-01</td> -->
				<td>admin@mail.com</td>
				<td>1234567890</td>
				<td class="td-manage">
				<a href="{{ URL('/admin/user/adduser') }}"><i class="Hui-iconfont" title="添加用户"></i></a> 
				<a href=""><i class="Hui-iconfont" title="修改信息"></i></a> 
				<a href=""><i class="Hui-iconfont" title="删除用户"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
	</div>
@endsection
