@extends('/admin/base/base')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>我的桌面</title>
  </head>
  <body>
      <h1>欢迎??用户名??回来</h1>
      <p id='tid' style='color:orange;font-size:20px;font-weight:blod;'></p>
  </body>
  <script type="text/javascript">
  		var tid = document.getElementById('tid');
  		setInterval(function(){
  			var date = new Date();
  			// 年月日 时分秒 
  			var Y = date.getFullYear();
  			var m = date.getMonth();
  			var d = date.getDate();

  			var H = date.getHours();
  			var i = date.getMinutes();
  			var s = date.getSeconds();
  			var w = date.getDay();

  			  H = (H<10) ? '0'+H : H;
	          i = (i<10) ? '0'+i : i;
	          s = (s<10) ? '0'+s : s;
	          if(w == 1){
	              w = '一';
	          }
	          if(w == 2){
	              w = '二';
	          }
	          if(w == 3){
	              w = '三';
	          }
	          if(w == 4){
	              w = '四';
	          }
	          if(w == 5){
	              w = '五';
	          }
	          if(w == 6){
	              w = '六';
	          }
	          if(w == 0){
	              w = '日';
	          }
  			var info = Y+'-'+m+'-'+d+'　'+H+':'+i+':'+s;
  			
  			tid.innerHTML = '当前时间是　:　' +info+'　周'+w;
  		},1000);
  </script>
</html>
@endsection